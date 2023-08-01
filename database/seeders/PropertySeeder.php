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

                // // Ambil satu data province secara acak
                // $province = Province::inRandomOrder()->first();

                // // Hubungkan property dengan province menggunakan attach()
                // $property->provinces()->attach($province->id);

                // // Ambil satu data regency yang terhubung dengan province tersebut secara acak
                // $regency = $province->regencies()->inRandomOrder()->first();

                // // Hubungkan property dengan regency menggunakan attach()
                // $property->regencies()->attach($regency->id);

                // // Ambil satu data district yang terhubung dengan regency tersebut secara acak
                // $district = $regency->districts()->inRandomOrder()->first();

                // // Hubungkan property dengan district menggunakan attach()
                // $property->districts()->attach($district->id);

                // // Ambil satu data village yang terhubung dengan district tersebut secara acak
                // $village = $district->villages()->inRandomOrder()->first();

                // // Hubungkan property dengan village menggunakan attach()
                // $property->villages()->attach($village->id);

                //  // Ambil regency_id dari property yang baru dibuat
                // $propertyRegencyId = $property->regencies->first()->id;

                // // Ambil agent dengan regency_id yang sesuai dari tabel pivot agent_regency
                // $randomAgent = Agent::whereHas('regencies', function ($query) use ($propertyRegencyId) {
                //     $query->where('regency_id', $propertyRegencyId);
                // })->inRandomOrder()->first();

                // if (!$randomAgent) {
                //     continue; // Jika tidak ada agent yang sesuai, skip unit ini dan lanjut ke unit berikutnya
                // }

                // // Tambahkan agent ke properti menggunakan relasi many-to-many
                // $property->agents()->attach($randomAgent->id);

                // Ambil agent dengan regency_id yang sesuai dari tabel pivot agent_regency
                $randomAgent = Agent::inRandomOrder()->first();

                if (!$randomAgent) {
                    continue; // Jika tidak ada agent yang sesuai, skip unit ini dan lanjut ke unit berikutnya
                }

                // Ambil province, regency, district, dan village dari agent
                $province = $randomAgent->provinces()->inRandomOrder()->first();
                $regency = $randomAgent->regencies()->inRandomOrder()->first();
                $district = $randomAgent->districts()->inRandomOrder()->first();
                $village = $randomAgent->villages()->inRandomOrder()->first();

                // Hubungkan property dengan province, regency, district, dan village dari agent menggunakan attach()
                $property->provinces()->attach($province->id);
                $property->regencies()->attach($regency->id);
                $property->districts()->attach($district->id);
                $property->villages()->attach($village->id);

                // Tambahkan agent ke properti menggunakan relasi many-to-many
                $property->agents()->attach($randomAgent->id);
            }

        
        }

        
    }
}
