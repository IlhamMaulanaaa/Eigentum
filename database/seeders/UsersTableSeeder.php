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
                'password' => Hash::make('admin123'),
                'role'=> 'admin',
                // 'agent_id' => '1'
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('password123'),
                'role'=> 'user',
                // 'agent_id' => '1'
            ],
            [
                'name' => 'ilhammaulana',
                'email' => 'ilham@example.com',
                'password' => Hash::make('password123'),
                'role'=> 'developer',
                // 'owner_id' => '1'
            ],
            [
                'name' => 'eigentum',
                'email' => 'eigentum@example.com',
                'role'=> 'agent',
                'password' => Hash::make('password123'),
                // 'agent_id' => '1'
            ],
            // Tambahkan data pengguna lainnya sesuai kebutuhan
        ];

        DB::table('users')->insert($users);
    }
}
