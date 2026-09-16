<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            if (!Schema::hasColumn('properties', 'home')) {
                $table->string('home')->nullable()->default('0');
            }
            if (!Schema::hasColumn('properties', 'un')) {
                $table->string('un')->nullable()->default('0');
            }
            if (!Schema::hasColumn('properties', 'meta')) {
                $table->text('meta')->nullable();
            }
            if (!Schema::hasColumn('properties', 'ownership')) {
                $table->string('ownership')->nullable();
            }
        });

        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'agent')) {
                $table->string('agent')->nullable()->default('0');
            }
            if (!Schema::hasColumn('users', 'slung')) {
                $table->string('slung')->nullable();
            }
            if (!Schema::hasColumn('users', 'position')) {
                $table->string('position')->nullable();
            }
            if (!Schema::hasColumn('users', 'content')) {
                $table->text('content')->nullable();
            }
        });

        if (Schema::hasColumn('properties', 'home')) {
            DB::table('properties')->update(['home' => '1']);
        }

        if (Schema::hasTable('users') && Schema::hasColumn('users', 'slung')) {
            $users = DB::table('users')->get();
            foreach ($users as $user) {
                $update = [];
                if (empty($user->slung ?? null)) {
                    $update['slung'] = Str::slug($user->name ?: 'agent-'.$user->id);
                }
                if ((int) ($user->is_admin ?? 0) === 1) {
                    $update['agent'] = '1';
                    if (empty($user->position ?? null)) {
                        $update['position'] = 'Director';
                    }
                }
                if ($update) {
                    DB::table('users')->where('id', $user->id)->update($update);
                }
            }
        }
    }

    public function down()
    {
        // Keep columns; they are required by the front-end queries.
    }
};
