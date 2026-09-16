#!/usr/bin/env python3
"""Convert a phpMyAdmin MySQL dump into a SQLite database."""

from __future__ import annotations

import os
import re
import sqlite3
import sys
from collections import defaultdict

MYSQL_ESCAPES = {
    "0": "\0",
    "b": "\b",
    "n": "\n",
    "r": "\r",
    "t": "\t",
    "Z": "\x1a",
    "\\": "\\",
    "'": "'",
    '"': '"',
    "%": "%",
    "_": "_",
}


def read_dump(path: str) -> str:
    with open(path, "r", encoding="utf-8", errors="replace") as handle:
        return handle.read()


def strip_mysql_noise(sql: str) -> str:
    sql = re.sub(r"/\*![0-9]{5}.*?\*/;", "", sql, flags=re.S)
    sql = re.sub(r"/\*.*?\*/", "", sql, flags=re.S)
    return sql


def parse_alter_metadata(sql: str):
    primary_keys = {}
    indexes = defaultdict(list)
    unique_indexes = defaultdict(list)
    autoincrements = set()

    for match in re.finditer(
        r"ALTER TABLE `(?P<table>[^`]+)`\s+(?P<body>.*?);",
        sql,
        flags=re.S | re.I,
    ):
        table = match.group("table")
        body = match.group("body")

        pk = re.search(r"ADD PRIMARY KEY\s*\((?P<cols>[^)]+)\)", body, flags=re.I)
        if pk:
            cols = [c.strip().strip("`") for c in pk.group("cols").split(",")]
            primary_keys[table] = cols

        for unique in re.finditer(
            r"ADD UNIQUE KEY `(?P<name>[^`]+)`\s*\((?P<cols>[^)]+)\)",
            body,
            flags=re.I,
        ):
            cols = [c.strip().strip("`") for c in unique.group("cols").split(",")]
            unique_indexes[table].append((unique.group("name"), cols))

        for key in re.finditer(
            r"ADD KEY `(?P<name>[^`]+)`\s*\((?P<cols>[^)]+)\)",
            body,
            flags=re.I,
        ):
            cols = [c.strip().strip("`") for c in key.group("cols").split(",")]
            indexes[table].append((key.group("name"), cols))

        auto = re.search(
            r"MODIFY `(?P<col>[^`]+)`[^,]*AUTO_INCREMENT",
            body,
            flags=re.I,
        )
        if auto:
            autoincrements.add((table, auto.group("col")))

    return primary_keys, indexes, unique_indexes, autoincrements


def convert_column_type(definition: str) -> str:
    definition = re.sub(r"\bCHARACTER SET\s+\S+", "", definition, flags=re.I)
    definition = re.sub(r"\bCOLLATE\s+\S+", "", definition, flags=re.I)
    definition = re.sub(r"\bUNSIGNED\b", "", definition, flags=re.I)
    definition = re.sub(r"\bZEROFILL\b", "", definition, flags=re.I)
    definition = re.sub(
        r"\b(tinyint|smallint|mediumint|int|integer|bigint)(\s*\(\d+\))?",
        "INTEGER",
        definition,
        flags=re.I,
    )
    definition = re.sub(
        r"\b(double|float|decimal|numeric|real)(\s*\([^)]+\))?",
        "REAL",
        definition,
        flags=re.I,
    )
    definition = re.sub(
        r"\b(longblob|mediumblob|tinyblob|blob|binary|varbinary)(\s*\([^)]+\))?",
        "BLOB",
        definition,
        flags=re.I,
    )
    definition = re.sub(
        r"\b(longtext|mediumtext|tinytext|text|json|varchar|char|enum|set)(\s*\([^)]+\))?",
        "TEXT",
        definition,
        flags=re.I,
    )
    definition = re.sub(
        r"\b(datetime|timestamp|date|time|year)(\s*\([^)]+\))?",
        "TEXT",
        definition,
        flags=re.I,
    )
    definition = re.sub(r"\s+", " ", definition).strip().rstrip(",")
    return definition


def convert_create_table(create_sql: str, table: str, primary_keys, autoincrements) -> str:
    match = re.search(r"CREATE TABLE `[^`]+`\s*\((.*)\)\s*(ENGINE=.*)?$", create_sql, flags=re.S | re.I)
    if not match:
        raise ValueError(f"Could not parse CREATE TABLE for {table}")

    body = match.group(1)
    raw_cols = []
    current = []
    depth = 0
    for char in body:
        if char == "(":
            depth += 1
        elif char == ")":
            depth -= 1
        if char == "," and depth == 0:
            raw_cols.append("".join(current).strip())
            current = []
        else:
            current.append(char)
    if "".join(current).strip():
        raw_cols.append("".join(current).strip())

    pk_cols = primary_keys.get(table, [])
    converted = []
    for raw in raw_cols:
        if not raw or raw.upper().startswith(("PRIMARY KEY", "KEY ", "UNIQUE KEY", "CONSTRAINT")):
            continue
        col_match = re.match(r"`([^`]+)`\s+(.*)", raw, flags=re.S)
        if not col_match:
            continue
        name, rest = col_match.group(1), col_match.group(2)
        rest = convert_column_type(rest)
        rest = re.sub(r"\bPRIMARY KEY\b", "", rest, flags=re.I)
        rest = re.sub(r"\bAUTO_INCREMENT\b", "", rest, flags=re.I)
        if pk_cols == [name]:
            rest = re.sub(r"\bNOT NULL\b", "", rest, flags=re.I)
            if (table, name) in autoincrements or rest.upper().startswith("INTEGER"):
                rest = re.sub(r"^INTEGER\b", "INTEGER", rest, flags=re.I)
                if not rest.upper().startswith("INTEGER"):
                    rest = "INTEGER " + rest
                suffix = " PRIMARY KEY AUTOINCREMENT" if (table, name) in autoincrements else " PRIMARY KEY"
                rest = rest.strip() + suffix
        converted.append(f"  `{name}` {rest.strip()}")

    if len(pk_cols) > 1:
        cols = ", ".join(f"`{c}`" for c in pk_cols)
        converted.append(f"  PRIMARY KEY ({cols})")

    return f"CREATE TABLE `{table}` (\n" + ",\n".join(converted) + "\n);"


def skip_string(sql: str, i: int) -> int:
    quote = sql[i]
    i += 1
    while i < len(sql):
        if sql[i] == "\\" and quote == "'":
            i += 2
            continue
        if sql[i] == quote:
            if i + 1 < len(sql) and sql[i + 1] == quote:
                i += 2
                continue
            return i + 1
        i += 1
    return i


def split_statements(sql: str):
    statements = []
    start = 0
    i = 0
    while i < len(sql):
        ch = sql[i]
        if ch in ("'", '"', "`"):
            i = skip_string(sql, i)
            continue
        if ch == "-" and i + 1 < len(sql) and sql[i + 1] == "-":
            while i < len(sql) and sql[i] != "\n":
                i += 1
            continue
        if ch == "#":
            while i < len(sql) and sql[i] != "\n":
                i += 1
            continue
        if ch == ";":
            stmt = sql[start:i].strip()
            if stmt:
                statements.append(stmt)
            start = i + 1
        i += 1
    tail = sql[start:].strip()
    if tail:
        statements.append(tail)
    return statements


def parse_mysql_string(sql: str, i: int):
    assert sql[i] == "'"
    i += 1
    out = []
    while i < len(sql):
        ch = sql[i]
        if ch == "\\":
            i += 1
            if i >= len(sql):
                break
            nxt = sql[i]
            out.append(MYSQL_ESCAPES.get(nxt, nxt))
            i += 1
            continue
        if ch == "'":
            if i + 1 < len(sql) and sql[i + 1] == "'":
                out.append("'")
                i += 2
                continue
            return "".join(out), i + 1
        out.append(ch)
        i += 1
    return "".join(out), i


def parse_insert_rows(values_sql: str):
    rows = []
    i = 0
    n = len(values_sql)
    while i < n:
        while i < n and values_sql[i] in " \t\r\n,":
            i += 1
        if i >= n:
            break
        if values_sql[i] != "(":
            raise ValueError(f"Expected '(', got {values_sql[i]!r} at {i}")
        i += 1
        row = []
        while True:
            while i < n and values_sql[i] in " \t\r\n":
                i += 1
            if i >= n:
                break
            if values_sql.startswith("NULL", i) and (i + 4 == n or not values_sql[i + 4].isalnum()):
                row.append(None)
                i += 4
            elif values_sql[i] == "'":
                value, i = parse_mysql_string(values_sql, i)
                row.append(value)
            else:
                start = i
                while i < n and values_sql[i] not in ",)":
                    i += 1
                token = values_sql[start:i].strip()
                if token == "":
                    row.append(None)
                else:
                    try:
                        row.append(int(token))
                    except ValueError:
                        try:
                            row.append(float(token))
                        except ValueError:
                            row.append(token)
            while i < n and values_sql[i] in " \t\r\n":
                i += 1
            if i < n and values_sql[i] == ",":
                i += 1
                continue
            if i < n and values_sql[i] == ")":
                i += 1
                break
            raise ValueError(f"Unexpected INSERT token at {i}: {values_sql[i:i+40]!r}")
        rows.append(row)
    return rows


def create_indexes(conn, indexes, unique_indexes):
    existing = {row[0] for row in conn.execute("SELECT name FROM sqlite_master WHERE type='table'")}
    used = set()
    for table, items in unique_indexes.items():
        if table not in existing:
            print(f"Skipping unique indexes for missing table {table}")
            continue
        for name, cols in items:
            idx = f"{table}_{name}" if name in used or name == "TransID" else name
            used.add(idx)
            colsql = ", ".join(f"`{c}`" for c in cols)
            conn.execute(f"CREATE UNIQUE INDEX IF NOT EXISTS `{idx}` ON `{table}` ({colsql})")
    for table, items in indexes.items():
        if table not in existing:
            print(f"Skipping indexes for missing table {table}")
            continue
        for name, cols in items:
            idx = f"{table}_{name}" if name in used else name
            used.add(idx)
            colsql = ", ".join(f"`{c}`" for c in cols)
            conn.execute(f"CREATE INDEX IF NOT EXISTS `{idx}` ON `{table}` ({colsql})")


def main():
    dump_path = sys.argv[1]
    db_path = sys.argv[2]
    raw = strip_mysql_noise(read_dump(dump_path))
    pks, indexes, unique_indexes, autoincrements = parse_alter_metadata(raw)

    if os.path.exists(db_path):
        os.remove(db_path)
    os.makedirs(os.path.dirname(db_path), exist_ok=True)

    conn = sqlite3.connect(db_path)
    conn.execute("PRAGMA foreign_keys = OFF")
    conn.execute("PRAGMA journal_mode = OFF")
    conn.execute("BEGIN")

    created = []
    inserted = defaultdict(int)

    for stmt in split_statements(raw):
        stmt = re.sub(r"--.*?$", "", stmt, flags=re.M)
        stmt = re.sub(r"#.*?$", "", stmt, flags=re.M)
        stmt = stmt.strip()
        if not stmt:
            continue
        upper = stmt.upper()
        if upper.startswith(("SET ", "START TRANSACTION", "COMMIT", "LOCK TABLES", "UNLOCK TABLES", "ALTER TABLE")):
            continue
        if upper.startswith("CREATE TABLE"):
            table = re.search(r"CREATE TABLE `([^`]+)`", stmt, flags=re.I).group(1)
            converted = convert_create_table(stmt, table, pks, autoincrements)
            try:
                conn.execute(converted)
                created.append(table)
            except sqlite3.Error as exc:
                print(f"CREATE TABLE failed for {table}: {exc}")
                print(converted)
                raise
            continue
        if upper.startswith("INSERT INTO"):
            match = re.match(
                r"INSERT INTO `([^`]+)`\s*(\((?:[^)]+)\))?\s*VALUES\s*(.*)$",
                stmt,
                flags=re.S | re.I,
            )
            if not match:
                raise ValueError("Could not parse INSERT: " + stmt[:120])
            table = match.group(1)
            cols = match.group(2)
            values = match.group(3)
            rows = parse_insert_rows(values)
            if not rows:
                continue
            placeholders = ",".join("?" for _ in rows[0])
            sql = f"INSERT INTO `{table}` {cols or ''} VALUES ({placeholders})"
            conn.executemany(sql, rows)
            inserted[table] += len(rows)
            continue

    print("Created tables:", ", ".join(created))
    create_indexes(conn, indexes, unique_indexes)

    property_cols = {row[1] for row in conn.execute("PRAGMA table_info(`properties`)")}
    if "home" not in property_cols:
        conn.execute("ALTER TABLE `properties` ADD COLUMN `home` INTEGER NOT NULL DEFAULT 0")
        conn.execute("UPDATE `properties` SET `home` = 1")

    conn.commit()
    conn.close()

    print(f"Created SQLite database: {db_path}")
    print(f"Tables: {len(created)}")
    for table in created:
        extra = f" ({inserted[table]} rows)" if inserted[table] else ""
        print(f"  - {table}{extra}")


if __name__ == "__main__":
    main()
