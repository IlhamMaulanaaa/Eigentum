<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Developer::truncate();

        for ($i = 0; $i < 5; $i++) {
            Developer::create([
                "email" => fake()->email(),
                "password" => bcrypt(fake()->password()),
                "company" => fake()->company(),
                "address" => Str::limit(fake()->address(), 20),
                "owner" => fake()->name(),
                "license" => fake()->imageUrl(),
                "phone_number" => fake()->phoneNumber(),
            ]);
        }
        
        
        // Developer::create([
        //     "email" => fake()->email(),
        //     "password" => bcrypt(fake()->password()),
        //     "company" => fake()->company(),
        //     "address" => Str::limit(fake()->address(), 20),
        //     "owner" => fake()->name(),
        //     "license" => fake()->imageUrl(),
        //     "phone_number" => fake()->phoneNumber(),
        // ]);
        // Developer::create([
        //     "email" => fake()->email(),
        //     "password" => bcrypt(fake()->password()),
        //     "company" => fake()->company(),
        //     "address" => Str::limit(fake()->address(), 20),
        //     "owner" => fake()->name(),
        //     "license" => fake()->imageUrl(),
        //     "phone_number" => fake()->phoneNumber(),
        // ]);
        // Developer::create([
        //     "email" => fake()->email(),
        //     "password" => bcrypt(fake()->password()),
        //     "company" => fake()->company(),
        //     "address" => Str::limit(fake()->address(), 20),
        //     "owner" => fake()->name(),
        //     "license" => fake()->imageUrl(),
        //     "phone_number" => fake()->phoneNumber(),
        // ]);
        // Developer::create([
        //     "email" => fake()->email(),
        //     "password" => bcrypt(fake()->password()),
        //     "company" => fake()->company(),
        //     "address" => Str::limit(fake()->address(), 20),
        //     "owner" => fake()->name(),
        //     "license" => fake()->imageUrl(),
        //     "phone_number" => fake()->phoneNumber(),
        // ]);
        // Developer::create([
        //     "email" => fake()->email(),
        //     "password" => bcrypt(fake()->password()),
        //     "company" => fake()->company(),
        //     "address" => Str::limit(fake()->address(), 20),
        //     "owner" => fake()->name(),
        //     "license" => fake()->imageUrl(),
        //     "phone_number" => fake()->phoneNumber(),
        // ]);
    }
}
