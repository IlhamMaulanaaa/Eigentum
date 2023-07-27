<?php

namespace Database\Seeders;

use App\Models\Developer;
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

        Developer::create([
            'company' => fake()->company(),
            'email' => fake()->email(),
            'password' => bcrypt(fake()->password()),
            'license' => $licenseString,
            'telp' => fake()->numerify('##########'),
        ]);
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
