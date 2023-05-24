<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
