<?php

namespace Database\Seeders;

use App\Models\Agent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Agent::truncate();

        for ($i = 0; $i < 5; $i++) {
            Agent::create([
                "email" => fake()->email(),
                "password" => bcrypt(fake()->password()),
                "name" => fake()->name(),
                "address" => Str::limit(fake()->address(), 20),
                "location" => mt_rand(1,34),
                "ktp" => fake()->imageUrl(),
                "face" => fake()->imageUrl(),
                "phone_number" => fake()->phoneNumber(),
            ]);
        }

        // Agent::create([
        //     "email" => fake()->email(),
        //     "password" => bcrypt(fake()->password()),
        //     "name" => fake()->name(),
        //     "address" => Str::limit(fake()->address(), 20),
        //     "location" => mt_rand(1,34),
        //     "ktp" => fake()->imageUrl(),
        //     "face" => fake()->imageUrl(),
        //     "phone_number" => fake()->phoneNumber(),
        // ]);
        // Agent::create([
        //     "email" => fake()->email(),
        //     "password" => bcrypt(fake()->password()),
        //     "name" => fake()->name(),
        //     "address" => Str::limit(fake()->address(), 20),
        //     "location" => mt_rand(1,34),
        //     "ktp" => fake()->imageUrl(),
        //     "face" => fake()->imageUrl(),
        //     "phone_number" => fake()->phoneNumber(),
        // ]);
        // Agent::create([
        //     "email" => fake()->email(),
        //     "password" => bcrypt(fake()->password()),
        //     "name" => fake()->name(),
        //     "address" => Str::limit(fake()->address(), 20),
        //     "location" => mt_rand(1,34),
        //     "ktp" => fake()->imageUrl(),
        //     "face" => fake()->imageUrl(),
        //     "phone_number" => fake()->phoneNumber(),
        // ]);
        // Agent::create([
        //     "email" => fake()->email(),
        //     "password" => bcrypt(fake()->password()),
        //     "name" => fake()->name(),
        //     "address" => Str::limit(fake()->address(), 20),
        //     "location" => mt_rand(1,34),
        //     "ktp" => fake()->imageUrl(),
        //     "face" => fake()->imageUrl(),
        //     "phone_number" => fake()->phoneNumber(),
        // ]);
        // Agent::create([
        //     "email" => fake()->email(),
        //     "password" => bcrypt(fake()->password()),
        //     "name" => fake()->name(),
        //     "address" => Str::limit(fake()->address(), 20),
        //     "location" => mt_rand(1,34),
        //     "ktp" => fake()->imageUrl(),
        //     "face" => fake()->imageUrl(),
        //     "phone_number" => fake()->phoneNumber(),
        // ]);
    }
}
