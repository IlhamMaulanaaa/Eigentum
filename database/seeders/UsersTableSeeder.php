<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\Developer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'user',
                'email' => 'user@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'developer',
                'email' => 'developer@example.com',
                'password' => Hash::make('password'),
                'role' => 'developer',
            ],
            [
                'name' => 'agent',
                'email' => 'agent@example.com',
                'password' => Hash::make('password'),
                'role' => 'agent',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
