<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\Developer;
use App\Models\Property;
use App\Models\Province;
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

                $property = Property::create([
                    'title' => fake()->company(),
                    'description' => fake()->paragraph(),
                    'address' => fake()->address(),
                    'developer_id' => $developerId,
                    'type_id' => $typeIds[$randomTypeId], 
                ]);

                $agentIds = Agent::pluck('id')->random(rand(2, 4))->toArray();
                $property->agents()->sync($agentIds);

                // Ambil satu data province secara acak
        $province = Province::inRandomOrder()->first();

        // Hubungkan developer dengan province menggunakan attach()
        $property->provinces()->attach($province->id);

        // Ambil satu data regency yang terhubung dengan province tersebut secara acak
        $regency = $province->regencies()->inRandomOrder()->first();

        // Hubungkan property dengan regency menggunakan attach()
        $property->regencies()->attach($regency->id);

        // Ambil satu data district yang terhubung dengan regency tersebut secara acak
        $district = $regency->districts()->inRandomOrder()->first();

        // Hubungkan property dengan district menggunakan attach()
        $property->districts()->attach($district->id);

        // Ambil satu data village yang terhubung dengan district tersebut secara acak
        $village = $district->villages()->inRandomOrder()->first();

        // Hubungkan property dengan village menggunakan attach()
        $property->villages()->attach($village->id);
            }

        
        }

        
    }
}
