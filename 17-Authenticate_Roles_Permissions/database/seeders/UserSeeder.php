<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Admin', 'User', 'Editor', 'Guest'];

        foreach ($roles as $role) {
            Role::query()->create(['name' => $role]);
        }

        $users = [
            [
                'name' => 'Admin Samet',
                'email' => 'smt@gmail.com',
                'passowrd' => Hash::make(123456),
            ],

            [
                'name' => 'User Ahmet',
                'email' => 'ahmet@gmail.com',
                'passowrd' => Hash::make(123456),
            ],

            [
                'name' => 'Editor Mehmet',
                'email' => 'mehmet@gmail.com',
                'passowrd' => Hash::make(123456),
            ],

            [
                'name' => 'Guest Mustafa',
                'email' => 'mustafa@gmail.com',
                'passowrd' => Hash::make(123456),
            ],
        ];

        foreach($users as $user) {
            $createUsers = User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['passowrd'],
            ]);
        }
    }
}
