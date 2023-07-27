<?php

namespace Database\Seeders;

use App\Models\Developer;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    Developer::truncate();

    for ($i = 0; $i < 10; $i++) {
        $licenseImages = $this->getImageUrls('license', 3);
        $licenseString = implode('|', $licenseImages); // Menggabungkan array nama file gambar menjadi satu string dipisahkan koma

        $developer = Developer::create([
            'company' => fake()->company(),
            'email' => fake()->email(),
            'password' => bcrypt(fake()->password()),
            'license' => $licenseString,
            'telp' => fake()->phoneNumber(),
        ]);
        // // Ambil data province secara urut
        // $provinces = Province::all();

        // // Hubungkan developer dengan province menggunakan sync()
        // $developer->provinces()->sync($provinces->pluck('id'));

        // // Loop melalui setiap province
        // foreach ($provinces as $province) {
        //     // Ambil data regency yang terhubung dengan province tertentu
        //     $regencies = $province->regencies;

        //     // Hubungkan developer dengan regency menggunakan sync()
        //     $developer->regencies()->sync($regencies->pluck('id'));

        //     // Loop melalui setiap regency
        //     foreach ($regencies as $regency) {
        //         // Ambil data district yang terhubung dengan regency tertentu
        //         $districts = $regency->districts;

        //         // Hubungkan developer dengan district menggunakan sync()
        //         $developer->districts()->sync($districts->pluck('id'));

        //         // Loop melalui setiap district
        //         foreach ($districts as $district) {
        //             // Ambil data village yang terhubung dengan district tertentu
        //             $villages = $district->villages;

        //             // Hubungkan developer dengan village menggunakan sync()
        //             $developer->villages()->sync($villages->pluck('id'));
        //         }
        //     }
        // }

        // Ambil satu data province secara acak
        $province = Province::inRandomOrder()->first();

        // Hubungkan developer dengan province menggunakan attach()
        $developer->provinces()->attach($province->id);

        // Ambil satu data regency yang terhubung dengan province tersebut secara acak
        $regency = $province->regencies()->inRandomOrder()->first();

        // Hubungkan developer dengan regency menggunakan attach()
        $developer->regencies()->attach($regency->id);

        // Ambil satu data district yang terhubung dengan regency tersebut secara acak
        $district = $regency->districts()->inRandomOrder()->first();

        // Hubungkan developer dengan district menggunakan attach()
        $developer->districts()->attach($district->id);

        // Ambil satu data village yang terhubung dengan district tersebut secara acak
        $village = $district->villages()->inRandomOrder()->first();

        // Hubungkan developer dengan village menggunakan attach()
        $developer->villages()->attach($village->id);
    }
}

private function getImageUrls($folderName, $count, $width = 400, $height = 300)
{
    $imageUrls = [];
    
    for ($i = 0; $i < $count; $i++) {
        // Ambil gambar dari folder public/$folderName
        $files = File::files(public_path($folderName));
        $randomImagePath = Arr::random($files);
    
        // Ubah path relatif gambar menjadi path absolut di folder storage
        $imagePath = $randomImagePath->getRealPath();
    
        // Ambil nama file dari path
        $imageName = pathinfo($imagePath, PATHINFO_FILENAME) . '.' . $randomImagePath->getExtension();
    
        // Tambahkan nama file ke dalam array imageUrls
        $imageUrls[] = $imageName;
    }

    // Pindahkan semua gambar ke folder storage
    foreach ($imageUrls as $imageName) {
        $imagePath = public_path($folderName . '/' . $imageName);

        Storage::delete('public/' . $folderName . '/' . $imageName);

        // Pindahkan gambar ke folder storage
        Storage::putFileAs('public/' , $imagePath, $imageName);
    }
    
    return $imageUrls;
}

}
