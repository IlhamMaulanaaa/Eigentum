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
        Agent::create([
            "email" => fake()->email(),
            "password" => bcrypt(fake()->password()),
            "name" => fake()->name(),
            "address" => Str::limit(fake()->address(), 20),
            "location" => Str::limit(fake()->address(), 20),
            "ktp" => fake()->imageUrl(),
            "phone_number" => fake()->phoneNumber(),
        ]);
        Agent::create([
            "email" => fake()->email(),
            "password" => bcrypt(fake()->password()),
            "name" => fake()->name(),
            "address" => Str::limit(fake()->address(), 20),
            "location" => Str::limit(fake()->address(), 20),
            "ktp" => fake()->imageUrl(),
            "phone_number" => fake()->phoneNumber(),
        ]);
        Agent::create([
            "email" => fake()->email(),
            "password" => bcrypt(fake()->password()),
            "name" => fake()->name(),
            "address" => Str::limit(fake()->address(), 20),
            "location" => Str::limit(fake()->address(), 20),
            "ktp" => fake()->imageUrl(),
            "phone_number" => fake()->phoneNumber(),
        ]);
        Agent::create([
            "email" => fake()->email(),
            "password" => bcrypt(fake()->password()),
            "name" => fake()->name(),
            "address" => Str::limit(fake()->address(), 20),
            "location" => Str::limit(fake()->address(), 20),
            "ktp" => fake()->imageUrl(),
            "phone_number" => fake()->phoneNumber(),
        ]);
        Agent::create([
            "email" => fake()->email(),
            "password" => bcrypt(fake()->password()),
            "name" => fake()->name(),
            "address" => Str::limit(fake()->address(), 20),
            "location" => Str::limit(fake()->address(), 20),
            "ktp" => fake()->imageUrl(),
            "phone_number" => fake()->phoneNumber(),
        ]);
    }
}
