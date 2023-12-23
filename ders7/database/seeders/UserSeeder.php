<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* // Seeder ile tekil veri ekleme

        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'fVJ5u@example.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'remember_token' => '1234567890',
            'current_team_id' => 1,
        ]);   */

        // Seeder ile birden fazla veri ekleme
        User::query()->truncate();
        $data = [
            [
                'name' => 'John Doe',
                'email' => 'fVJ5u@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now()
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'qY5Oy@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now()
            ],
            [
                'name' => 'Mark Doe',
                'email' => 'XUqC8@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now()
            ],
            [
                'name' => 'Mary Doe',
                'email' => 'qGx0A@example.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now()
            ]
            ];

            User::query()->insert([$data]);

    }
}
