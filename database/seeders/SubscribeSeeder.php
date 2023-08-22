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
        Subscribe::truncate();

        // $titles = [
        //     'Extended',
        //     'Premium', 
        // ];

        // $descriptions = [
        //     'Extended',
        //     'Premium', 
        // ];

        // $prices = [
        //     100000,
        //     200000,
        // ];

        // $features = [
        //     'Extended',
        //     'Premium', 
        // ];

        Subscribe::truncate();

        for ($i = 0; $i < 1; $i++) {
            Subscribe::create([
                'title' =>  'Paket Developer',
                'description'   =>  'Paket ini hanya untuk developer',
                'price' =>  100000,
                'feature' => 'Akses Dashboard Developer',
                // 'feature_2' => 'fitur untuk developer',
                // 'feature_3' => 'fitur untuk developer',
                // 'feature_4' => 'fitur untuk developer',
            ]);
        }
    }
}
