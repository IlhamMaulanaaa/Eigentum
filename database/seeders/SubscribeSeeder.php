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
                'description'   =>  'Selamat datang di platform E-Commerce Properti terkemuka yang telah menjadi wadah unggulan bagi para pencari properti dan pelaku industri properti. Kami mengundang Anda para developer properti berbakat untuk bergabung dalam komunitas kami dan memanfaatkan kesempatan untuk mempromosikan properti-properti menarik Anda kepada jutaan calon pembeli yang potensial.',
                'price' =>  100000,
                'feature_1' => 'Dengan menjadi developer terdaftar di platform kami, Anda akan mendapatkan eksposur yang signifikan di kalangan pencari properti. ',
                'feature_2' => 'Kami memiliki tim pemasaran yang berdedikasi untuk mempromosikan properti Anda secara intensif.',
                'feature_3' => 'Dalam hal presentasi properti, kami memberikan yang terbaik.',
                'feature_4' => 'Melalui dashboard khusus developer, Anda dapat dengan mudah mengelola properti-properti Anda. ',
            ]);
        }
    }
}
