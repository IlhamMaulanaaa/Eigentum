<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Property::truncate();

        $properties = [
            [
                "property" => "Perumahan Megawon Indah",
                "description" => "Perumahan Dekat kali",
                "address" => Str::limit(fake()->address(), 20),
                "developer_id" => mt_rand(1, 5),
                "type_id" => mt_rand(1, 5),
            ],
            [
                "property" => "Apartement Surya",
                "description" => "Punyanya Surya Ibrahim",
                "address" => Str::limit(fake()->address(), 20),
                "developer_id" => mt_rand(1, 5),
                "type_id" => mt_rand(1, 5),
            ],
            [
                "property" => "Apartement Ilham",
                "description" => "Punyanya Ilham",
                "address" => Str::limit(fake()->address(), 20),
                "developer_id" => mt_rand(1, 5),
                "type_id" => mt_rand(1, 5),
            ],
            [
                "property" => "Apartement Najib",
                "description" => "Punyanya Najib",
                "address" => Str::limit(fake()->address(), 20),
                "developer_id" => mt_rand(1, 5),
                "type_id" => mt_rand(1, 5),
            ],
            [
                "property" => "Apartement Gataw",
                "description" => "Punyanya Gataw",
                "address" => Str::limit(fake()->address(), 20),
                "developer_id" => mt_rand(1, 5),
                "type_id" => mt_rand(1, 5),
            ],
        ];
        
        foreach ($properties as $propertyData) {
            Property::create($propertyData);
        }
        
    }
}
