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
                'name' => 'eigentum',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'role'=> 'admin',
                // 'agent_id' => '1'
            ],
            [
                'name' => 'John Doe',
                'email' => 'Jhon@gmail.com',
                'password' => Hash::make('password123'),
                'role'=> 'user',
                // 'agent_id' => '1'
            ],
            [
                'name' => 'Jmann',
                'email' => 'Jmann@gmail.com',
                'password' => Hash::make('password123'),
                'role'=> 'developer',
                // 'owner_id' => '1'
            ],
            [
                'name' => 'patrick',
                'email' => 'patrick@gmail.com',
                'role'=> 'agent',
                'password' => Hash::make('password123'),
                // 'agent_id' => '1'
            ],
            // Tambahkan data pengguna lainnya sesuai kebutuhan
        ];

        DB::table('users')->insert($users);
    }
}
