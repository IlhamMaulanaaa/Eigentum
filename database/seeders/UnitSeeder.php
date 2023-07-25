<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unit::truncate();

        $units = [
            [
                "title" => "Unit 1",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "price" => 100000.00,
                "image" => "image1.jpg",
                "property_id" => mt_rand(1,5)
            ],
            [
                "title" => "Unit 2",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "price" => 150000.00,
                "image" => "image2.jpg",
                "property_id" => mt_rand(1,5)
            ],
            [
                "title" => "Unit 3",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "price" => 200000.00,
                "image" => "image3.jpg",
                "property_id" => mt_rand(1,5)
            ],
            [
                "title" => "Unit 4",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "price" => 250000.00,
                "image" => "image4.jpg",
                "property_id" => mt_rand(1,5)
            ],
            [
                "title" => "Unit 5",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "price" => 300000.00,
                "image" => "image5.jpg",
                "property_id" => mt_rand(1,5)
            ],
        ];

        foreach ($units as $unitData) {
            Unit::create($unitData);
        }
    }
}
