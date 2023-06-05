<?php

namespace Database\Seeders;

use App\Models\AgentProperty;
use Illuminate\Database\Seeder;

class AgentPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AgentProperty::truncate();

        for ($i = 0; $i < 5; $i++) {
            AgentProperty::create([
                "agent_id" => mt_rand(1, 5),
                "property_id" => mt_rand(1, 5),
            ]);
        }
        

    }
}
