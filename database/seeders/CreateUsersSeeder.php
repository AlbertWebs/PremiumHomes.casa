<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'System Admin',
               'email'=>'admin@premiumhomes.casa',
               'is_admin'=>'1',
               'password'=> bcrypt('p@$$word'),
            ],

            [
               'name'=>'User',
               'email'=>'user@premiumhomes.casa',
               'is_admin'=>'0',
               'password'=> bcrypt('p@$$word'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
