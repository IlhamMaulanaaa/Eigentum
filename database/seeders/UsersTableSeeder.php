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
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('secret'),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'ilhammaulana',
                'email' => 'ilham@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'eigentum',
                'email' => 'eigentum@example.com',
                'password' => Hash::make('password123'),
            ],
            // Tambahkan data pengguna lainnya sesuai kebutuhan
        ];

        DB::table('users')->insert($users);
    }
}
