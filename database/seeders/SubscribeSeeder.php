<?php

namespace Database\Seeders;

use App\Models\Subscribe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $titles = [
            'Free',
            'Extended',
            'Premium', 
        ];

        $descriptions = [
            'Free',
            'Extended',
            'Premium', 
        ];

        $prices = [
            0,
            100000,
            200000,
        ];

        $features = [
            'Free',
            'Extended',
            'Premium', 
        ];

        Subscribe::truncate();

        for ($i = 0; $i < 3; $i++) {
            Subscribe::create([
                'title' => $titles[$i],
                'description' => $descriptions[$i],
                'price' => $prices[$i],
                'feature_1' => $features[$i],
                'feature_2' => $features[$i],
                'feature_3' => $features[$i],
                'feature_4' => $features[$i],
            ]);
        }
    }
}
