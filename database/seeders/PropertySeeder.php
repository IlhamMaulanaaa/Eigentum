<?php

namespace Database\Seeders;

use App\Models\Developer;
use App\Models\Property;
use App\Models\Type;
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
        Property::truncate();

        $developerIds = Developer::pluck('id')->toArray();
        $typeIds = Type::pluck('id')->toArray();

        foreach ($developerIds as $developerId) {
            
            $randomTypeId = array_rand($typeIds);
        
            $numberOfProperties = rand(2, 5);

            for ($i = 0; $i < $numberOfProperties; $i++) {
                $randomTypeId = array_rand($typeIds);

                Property::create([
                    'property' => fake()->company(),
                    'description' => Str::limit(fake()->text()) ,
                    'address' => Str::limit(fake()->address()),
                    'developer_id' => $developerId,
                    'type_id' => $typeIds[$randomTypeId], 
                ]);
            }
        }
    }
}
