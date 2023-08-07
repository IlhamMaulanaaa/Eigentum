<?php

namespace Database\Seeders;

use App\Models\Developer;
use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Owner::truncate();

        $developerIds = Developer::all();

        foreach ($developerIds as $developerId) {
            Owner::create([
                // 'name' => fake()->name(),
                // 'owner_email' => fake()->email(),
                // 'owner_password' => bcrypt(fake()->password()),
                'ktp' => $this->getImageUrl('ktp'),
                'face' => $this->getImageUrl('face'),
                'developer_id' => $developerId->id,
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
