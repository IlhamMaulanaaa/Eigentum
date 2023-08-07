<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin123@gmail.com',
        //     'password' => bcrypt('12345678'),
        // ]);

        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin345@gmail.com',
        //     'password' => bcrypt('12345678'),
        // ]);

        $this->call(UsersTableSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(GuideSeeder::class);
        $this->call(SubscribeSeeder::class);

        $this->call(IndoRegionProvinceSeeder::class);
        $this->call(IndoRegionRegencySeeder::class);
        $this->call(IndoRegionDistrictSeeder::class);
        $this->call(IndoRegionVillageSeeder::class);

        $this->call(AgentSeeder::class);

        $this->call(DeveloperSeeder::class);
        $this->call(OwnerSeeder::class);

        $this->call(PropertySeeder::class);
        $this->call(UnitSeeder::class);
    }
}
