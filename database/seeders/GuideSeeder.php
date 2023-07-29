<?php

namespace Database\Seeders;

use App\Models\Guide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

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
                "description" => fake()->paragraph(),
                "image" => $this->getImageUrl('house'),
            ]);
        }
    }

    private function getImageUrl($folderName, $width = 400, $height = 300)
    {
        $files = File::files(public_path($folderName));
        $randomImagePath = Arr::random($files);
        $imagePath = $randomImagePath->getRealPath();
        $imageName = pathinfo($imagePath, PATHINFO_FILENAME) . '.' . $randomImagePath->getExtension();
        Storage::delete('public/' . $folderName . '/' . $imageName);
        Storage::putFileAs('public/' , $imagePath, $imageName);

        return $imageName;
    }
}
