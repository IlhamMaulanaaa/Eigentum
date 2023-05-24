<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Property::truncate();
        Property::create([
            // "unit" => "A1",
            "property" => "Perumahan Megawon Indah",
            "description" => "Perumahan Dekat kali",
            "address" => " Jl. Lingkar Timur, Krasak, Ngembal Kulon, Jati, Kudus Regency, Central Java",
            "developer_id" => mt_rand(1,5),
            "type_id" => mt_rand(1,5),
        ]);

        Property::create([
            // "unit" => "A1",
            "property" => "Apartement Surya",
            "description" => "Punyanya Surya Ibrahim",
            "address" => "TumpangKrasak",
            "developer_id" => mt_rand(1,5),
            "type_id" => mt_rand(1,5),
        ]);
        Property::create([
            // "unit" => "A1",
            "property" => "Apartement Surya",
            "description" => "Punyanya Surya Ibrahim",
            "address" => "TumpangKrasak",
            "developer_id" => mt_rand(1,5),
            "type_id" => mt_rand(1,5),
        ]);
        Property::create([
            // "unit" => "A1",
            "property" => "Apartement Surya",
            "description" => "Punyanya Surya Ibrahim",
            "address" => "TumpangKrasak",
            "developer_id" => mt_rand(1,5),
            "type_id" => mt_rand(1,5),
        ]);
        Property::create([
            // "unit" => "A1",
            "property" => "Apartement Surya",
            "description" => "Punyanya Surya Ibrahim",
              "address" => "TumpangKrasak",
            "developer_id" => mt_rand(1,5),
            "type_id" => mt_rand(1,5),
        ]);
    }
}
