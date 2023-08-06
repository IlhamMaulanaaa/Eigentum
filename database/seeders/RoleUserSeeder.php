<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Mendapatkan beberapa role dan user acak
        $roles = Role::inRandomOrder()->take(2)->get();
        $users = User::inRandomOrder()->take(4)->get();

        // Loop untuk menghubungkan role dan user
        foreach ($users as $user) {
            $user->roles()->attach($roles);
        }
    }
}
