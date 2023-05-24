<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Agent;
use App\Models\Agent_Property;
use App\Models\Customer;
use App\Models\Developer;
use App\Models\Guide;
use App\Models\Property;
use App\Models\Specification;
use App\Models\Type;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

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
            "description" => "Punyanya Surya",
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
            "description" => "Punyanya Ini",
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
            "description" => "Punyanya Ini",
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

        // Property::truncate();

        Property::create([
            // "unit" => "A1",
            "property" => "Perumahan Megawon Indah",
            "description" => "Perumahan Dekat kali",
            "address" => Str::limit(fake()->address(), 20),
            "developer_id" => mt_rand(1,5),
            "type_id" => mt_rand(1,5),

        ]);

        Property::create([
            // "unit" => "A1",
            "property" => "Apartement Surya",
            "description" => "Punyanya Surya Ibrahim",
            "address" => Str::limit(fake()->address(), 20),
            "developer_id" => mt_rand(1,5),
            "type_id" => mt_rand(1,5),

        ]);
        Property::create([
            // "unit" => "A1",
            "property" => "Apartement Ilham",
            "description" => "Punyanya Ilham",
            "address" => Str::limit(fake()->address(), 20),
            "developer_id" => mt_rand(1,5),
            "type_id" => mt_rand(1,5),

        ]);
        Property::create([
            // "unit" => "A1",
            "property" => "Apartement Najib",
            "description" => "Punyanya Najib",
            "address" => Str::limit(fake()->address(), 20),
            "developer_id" => mt_rand(1,5),
            "type_id" => mt_rand(1,5),

        ]);
        Property::create([
            // "unit" => "A1",
            "property" => "Apartement Gataw",
            "description" => "Punyanya Gataw",
            "address" => Str::limit(fake()->address(), 20),
            "developer_id" => mt_rand(1,5),
            "type_id" => mt_rand(1,5),

        ]);


        Developer::truncate();
        
        Developer::create([
            "email" => fake()->email(),
            "password" => bcrypt(fake()->password()),
            "company" => fake()->company(),
            "address" => Str::limit(fake()->address(), 20),
            "owner" => fake()->name(),
            "license" => fake()->imageUrl(),
            "phone_number" => fake()->phoneNumber(),
        ]);
        Developer::create([
            "email" => fake()->email(),
            "password" => bcrypt(fake()->password()),
            "company" => fake()->company(),
            "address" => Str::limit(fake()->address(), 20),
            "owner" => fake()->name(),
            "license" => fake()->imageUrl(),
            "phone_number" => fake()->phoneNumber(),
        ]);
        Developer::create([
            "email" => fake()->email(),
            "password" => bcrypt(fake()->password()),
            "company" => fake()->company(),
            "address" => Str::limit(fake()->address(), 20),
            "owner" => fake()->name(),
            "license" => fake()->imageUrl(),
            "phone_number" => fake()->phoneNumber(),
        ]);
        Developer::create([
            "email" => fake()->email(),
            "password" => bcrypt(fake()->password()),
            "company" => fake()->company(),
            "address" => Str::limit(fake()->address(), 20),
            "owner" => fake()->name(),
            "license" => fake()->imageUrl(),
            "phone_number" => fake()->phoneNumber(),
        ]);
        Developer::create([
            "email" => fake()->email(),
            "password" => bcrypt(fake()->password()),
            "company" => fake()->company(),
            "address" => Str::limit(fake()->address(), 20),
            "owner" => fake()->name(),
            "license" => fake()->imageUrl(),
            "phone_number" => fake()->phoneNumber(),
        ]);

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
        
        Agent_Property::truncate();

        Agent_Property::create([
            "agent_id" => mt_rand(1,5),
            "property_id" => mt_rand(1,5),
        ]);

        Agent_Property::create([
            "agent_id" => mt_rand(1,5),
            "property_id" => mt_rand(1,5),
        ]);

        Agent_Property::create([
            "agent_id" => mt_rand(1,5),
            "property_id" => mt_rand(1,5),
        ]);

        Agent_Property::create([
            "agent_id" => mt_rand(1,5),
            "property_id" => mt_rand(1,5),
        ]);
        
        Agent_Property::create([
            "agent_id" => mt_rand(1,5),
            "property_id" => mt_rand(1,5),
        ]);

        Guide::truncate();

        Guide::create([
            "title" => fake()->title(),
            "description" => fake()->text(),
            "image" => fake()->imageUrl(),
        ]);
        Guide::create([
            "title" => fake()->title(),
            "description" => fake()->text(),
            "image" => fake()->imageUrl(),
        ]);
        Guide::create([
            "title" => fake()->title(),
            "description" => fake()->text(),
            "image" => fake()->imageUrl(),
        ]);
        Guide::create([
            "title" => fake()->title(),
            "description" => fake()->text(),
            "image" => fake()->imageUrl(),
        ]);
        Guide::create([
            "title" => fake()->title(),
            "description" => fake()->text(),
            "image" => fake()->imageUrl(),
        ]);
        Guide::create([
            "title" => fake()->title(),
            "description" => fake()->text(),
            "image" => fake()->imageUrl(),
        ]);

        Customer::truncate();
        
        Customer::create([
            "email" => fake()->email(),
            "password" => bcrypt(fake()->password()),
            "name" => fake()->name(),
            "address" => Str::limit(fake()->address(), 20),
            "phone_number" => fake()->phoneNumber(), 
        ]);
        Customer::create([
            "email" => fake()->email(),
            "password" => bcrypt(fake()->password()),
            "name" => fake()->name(),
            "address" => Str::limit(fake()->address(), 20),
            "phone_number" => fake()->phoneNumber(), 
        ]);
        Customer::create([
            "email" => fake()->email(),
            "password" => bcrypt(fake()->password()),
            "name" => fake()->name(),
            "address" => Str::limit(fake()->address(), 20),
            "phone_number" => fake()->phoneNumber(), 
        ]);
        Customer::create([
            "email" => fake()->email(),
            "password" => bcrypt(fake()->password()),
            "name" => fake()->name(),
            "address" => Str::limit(fake()->address(), 20),
            "phone_number" => fake()->phoneNumber(), 
        ]);
        Customer::create([
            "email" => fake()->email(),
            "password" => bcrypt(fake()->password()),
            "name" => fake()->name(),
            "address" => Str::limit(fake()->address(), 20),
            "phone_number" => fake()->phoneNumber(), 
        ]);
    }
}
