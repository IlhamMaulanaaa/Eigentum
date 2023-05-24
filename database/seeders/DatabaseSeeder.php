<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Property;
use App\Models\Specification;
use App\Models\Type;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin123@gmail.com',
            'password' => bcrypt('qwerty'),
        ]);

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

        Type::truncate();
        
        Type::create([
            'type' => 'Housing',
            'description' => 'Housing atau Perumahan adalah suatu properti yang didalamnya memiliki beberapa unit dan biasanya memiliki fasilitas umum seperti taman, gym, dan masjid.',
        ]);

        Type::create([
            'type' => 'Apartement',
            'description' => 'Apartemen adalah unit hunian yang terletak dalam sebuah bangunan bertingkat yang terdiri dari beberapa unit atau lantai.',
        ]);

        Type::create([
            'type' => 'Ruko',
            'description' => 'Ruko, singkatan dari "rumah toko", adalah bangunan yang dirancang untuk fungsi ganda sebagai tempat tinggal di lantai atas dan toko atau tempat usaha di lantai bawah. ',
        ]);

        Type::create([
            'type' => 'Villa',
            'description' => 'Villa adalah rumah atau bangunan tinggal yang luas dan mewah. Villas sering kali terletak di daerah yang eksklusif, dengan kebun yang indah dan pemandangan alam yang menarik.',
        ]);

        Type::create([
            'type' => 'Rusun',
            'description' => 'Rusun adalah singkatan dari "rumah susun" yang merujuk pada bangunan hunian dengan unit-unit tinggal yang terletak dalam satu gedung bertingkat',
        ]);

        Specification::truncate();

        Specification::create([
            "bedroom" => "2",
            "bathroom" => "1",
            "surface_area" => "100",
            "building_area" => "100",
            "floor" => "1",
        ]);

        Specification::create([
            "bedroom" => "4",
            "bathroom" => "1",
            "surface_area" => "500",
            "building_area" => "100",
            "floor" => "4",
        ]);

        Specification::create([
            "bedroom" => "2",
            "bathroom" => "1",
            "surface_area" => "400",
            "building_area" => "100",
            "floor" => "2",
        ]);

        Specification::create([
            "bedroom" => "4",
            "bathroom" => "1",
            "surface_area" => "100",
            "building_area" => "100",
            "floor" => "3",
        ]);
        
        Specification::create([
            "bedroom" => "4",
            "bathroom" => "1",
            "surface_area" => "100",
            "building_area" => "100",
            "floor" => "3",
        ]);

        Property::truncate();
        Property::create([
            // "unit" => "A1",
            "property" => "Perumahan Megawon Indah",
            "description" => "Perumahan Dekat kali",
            "address" => " Jl. Lingkar Timur, Krasak, Ngembal Kulon, Jati, Kudus Regency, Central Java",
            "type_id" => mt_rand(1,5),
        ]);

        Property::create([
            // "unit" => "A1",
            "property" => "Apartement Surya",
            "description" => "Punyanya Surya Ibrahim",
            "address" => "TumpangKrasak",
            "type_id" => mt_rand(1,5),
        ]);
        Property::create([
            // "unit" => "A1",
            "property" => "Apartement Surya",
            "description" => "Punyanya Surya Ibrahim",
            "address" => "TumpangKrasak",
            "type_id" => mt_rand(1,5),
        ]);
        Property::create([
            // "unit" => "A1",
            "property" => "Apartement Surya",
            "description" => "Punyanya Surya Ibrahim",
            "address" => "TumpangKrasak",
            "type_id" => mt_rand(1,5),
        ]);
        Property::create([
            // "unit" => "A1",
            "property" => "Apartement Surya",
            "description" => "Punyanya Surya Ibrahim",
            "address" => "TumpangKrasak",
            "type_id" => mt_rand(1,5),
        ]);
        
        
    }
}
