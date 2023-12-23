<?php

namespace Database\Seeders;

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
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'fVJ5u@example.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'remember_token' => '1234567890',
            'current_team_id' => 1,
        ]);   
    }
}
