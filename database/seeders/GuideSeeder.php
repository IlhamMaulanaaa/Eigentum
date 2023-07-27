<?php

namespace Database\Seeders;

use App\Models\Guide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guide::truncate();

        for ($i = 0; $i < 6; $i++) {
            Guide::create([
                "title" => fake()->title(),
                "description" => fake()->text(),
                "image" => $this->getImageUrl('house'),
            ]);
        }
        
    }

    private function getImageUrl($folderName, $width = 400, $height = 300)
    {
        // Ambil gambar dari folder public/$folderName
        $files = File::files(public_path($folderName));
        $randomImagePath = Arr::random($files);
    
        // Ubah path relatif gambar menjadi path absolut di folder storage
        $imagePath = $randomImagePath->getRealPath();
    
        // Ambil nama file dari path
        $imageName = pathinfo($imagePath, PATHINFO_FILENAME) . '.' . $randomImagePath->getExtension();
    
        // Hapus file image yang sudah ada dengan nama yang sama di dalam folder storage
        Storage::delete('public/' . $folderName . '/' . $imageName);
    
        // Pindahkan gambar ke folder storage
        Storage::putFileAs('public/' , $imagePath, $imageName);
    
        // Membangun URL gambar berdasarkan path relatif dari folder storage
        // $imageUrl = Storage::url($folderName . '/' . $imageName);
    
        return $imageName;
    }


}
