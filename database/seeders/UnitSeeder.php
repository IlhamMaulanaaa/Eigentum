<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unit::truncate();

        Unit::create([
            "title" => "A1",
            "description" => "Perumahan Dekat kali",
            "price" => fake()->randomFloat(2,  0, 1000),
            "rent" => fake()->randomFloat(2,  0, 1000),
            "image_1" => fake()->imageUrl(),
            "image_2" => fake()->imageUrl(),
            "image_3" => fake()->imageUrl(),
            "image_4" => fake()->imageUrl(),
            "image_plan" => fake()->imageUrl(),
            "bloc" => "A",
            "certificate" => fake()->imageUrl(),
            "specification_id" => mt_rand(1,5),
            "property_id" => mt_rand(1,5)
        ]);

        Unit::create([
            "title" => "A2",
            "description" => "Punyanya Surya Ibrahim",
            "price" => fake()->randomFloat(2,  0, 1000),
            "rent" => fake()->randomFloat(2,  0, 1000),
            "image_1" => fake()->imageUrl(),
            "image_2" => fake()->imageUrl(),
            "image_3" => fake()->imageUrl(),
            "image_4" => fake()->imageUrl(),
            "image_plan" => fake()->imageUrl(),
            "bloc" => "A",
            "certificate" => fake()->imageUrl(),
            "specification_id" => mt_rand(1,5),
            "property_id" => mt_rand(1,5)
        ]);

        Unit::create([
            "title" => "A3",
            "description" => "Punyanya Surya Ibrahim",
            "price" => fake()->randomFloat(2,  0, 1000),
            "rent" => fake()->randomFloat(2,  0, 1000),
            "image_1" => fake()->imageUrl(),
            "image_2" => fake()->imageUrl(),
            "image_3" => fake()->imageUrl(),
            "image_4" => fake()->imageUrl(),
            "image_plan" => fake()->imageUrl(),
            "bloc" => "A",
            "certificate" => fake()->imageUrl(),
            "specification_id" => mt_rand(1,5),
            "property_id" => mt_rand(1,5)
        ]);

        Unit::create([
            "title" => "A4",
            "description" => "Punyanya Surya Ibrahim",
            "price" => fake()->randomFloat(2,  0, 1000),
            "rent" => fake()->randomFloat(2,  0, 1000),
            "image_1" => fake()->imageUrl(),
            "image_2" => fake()->imageUrl(),
            "image_3" => fake()->imageUrl(),
            "image_4" => fake()->imageUrl(),
            "image_plan" => fake()->imageUrl(),
            "bloc" => "A",
            "certificate" => fake()->imageUrl(),
            "specification_id" => mt_rand(1,5),
            "property_id" => mt_rand(1,5)
        ]);
    }
}
