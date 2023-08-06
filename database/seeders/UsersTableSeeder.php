<?php

namespace Database\Seeders;

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
                'name' => 'Muhammad Ilham Maulana',
                'email' => 'admin@gmail.com',
                'role'=> 'admin',
                'password' => Hash::make('admin123'),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'role'=> 'user',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'ilhammaulana',
                'email' => 'ilham@example.com',
                'role'=> 'developer',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'eigentum',
                'email' => 'eigentum@example.com',
                'role'=> 'agent',
                'password' => Hash::make('password123'),
            ],
            // Tambahkan data pengguna lainnya sesuai kebutuhan
        ];

        DB::table('users')->insert($users);
    }
}
