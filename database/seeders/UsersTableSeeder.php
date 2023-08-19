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
                'name' => 'eigentum',
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
        ];

        DB::table('users')->insert($users);

        $developer = User::create([
            'name' => 'Developer',
            'email' => 'developer@example.com',
            'password' => Hash::make('password'),
            'role' => 'developer',
        ]);

        // Membuat pengguna dengan role agent
        $agent = User::create([
            'name' => 'Agent',
            'email' => 'agent@example.com',
            'password' => Hash::make('password'),
            'role' => 'agent',
        ]);

        // Menyambungkan pengguna dengan pengembang
        $developerUserIds = [$developer->id];
        $developer->developers()->attach($developerUserIds);

        // Menyambungkan pengguna dengan pengembang berdasarkan role
        $developerUserIds = User::where('role', 'developer')->pluck('id');
        $developers = Developer::pluck('id');
        foreach ($developerUserIds as $userId) {
            $user = User::find($userId);
            $user->developers()->attach($developers);
        }

        // Menyambungkan pengguna dengan agen
        $agentUserIds = [$agent->id];
        $agent->agents()->attach($agentUserIds);

        // Menyambungkan pengguna dengan agen berdasarkan role
        $agentUserIds = User::where('role', 'agent')->pluck('id');
        $agents = Agent::pluck('id');
        foreach ($agentUserIds as $userId) {
            $user = User::find($userId);
            $user->agents()->attach($agents);
        }
    }
}
