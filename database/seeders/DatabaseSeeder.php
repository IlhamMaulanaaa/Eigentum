<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name' => 'Admin',
            'email' => 'admin123@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $this->call(CustomerSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(GuideSeeder::class);
        
        $this->call(DeveloperSeeder::class);
        $this->call(OwnerSeeder::class);
        
        $this->call(PropertySeeder::class);
        $this->call(AgentSeeder::class);

        $this->call(UnitSeeder::class);

        $this->call(IndoRegionProvinceSeeder::class);
        $this->call(IndoRegionRegencySeeder::class);
        $this->call(IndoRegionDistrictSeeder::class);
        $this->call(IndoRegionVillageSeeder::class);

    }
}
