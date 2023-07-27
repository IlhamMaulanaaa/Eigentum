<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Property;
use App\Models\Specification;
use App\Models\Status;
use App\Models\Unit;
use App\Models\UnitStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Unit::truncate();
        UnitStatus::truncate();
        Image::truncate();
        Specification::truncate();

        $propertyIds = Property::pluck('id')->toArray();

        foreach ($propertyIds as $propertyId) {
            $numberOfUnits = rand(2, 4);
            $units = [];

            for ($i = 0; $i < $numberOfUnits; $i++) {
                $livingroomImages = $this->getImageUrls('livingroom', 3);
                $bedroomImages = $this->getImageUrls('bedroom', 3);
                $bathroomImages = $this->getImageUrls('bathroom', 3);
                $kitchenImages = $this->getImageUrls('kitchen', 3);
                $assetsImages = $this->getImageUrls('house', 3);

                $livingroomString = implode('|', $livingroomImages);
                $bedroomString = implode('|', $bedroomImages);
                $bathroomString = implode('|', $bathroomImages);
                $kitchenString = implode('|', $kitchenImages);
                $assetString = implode('|', $assetsImages); 
                $unit = Unit::create([
                    'title' => fake()->company(),
                    'description' => Str::limit(fake()->text()),
                    'price' => fake()->randomFloat(7, 10, 10000),
                    'image' => $this->getImageUrl('house'),
                    'property_id' => $propertyId,
                ]);

                $units[] = $unit; // Simpan object unit untuk digunakan di hubungan many-to-many
            }

            $statuses = Status::pluck('id')->random(rand(1, 2))->toArray();
            foreach ($units as $unit) {
                UnitStatus::create([
                    'unit_id' => $unit->id,
                    'status_id' => Arr::random($statuses),
                ]);

                $image = Image::create([
                    'livingroomimg' => $livingroomString,
                    'bedroomimg' => $bedroomString,
                    'bathroomimg' => $bathroomString,
                    'kitchenimg' => $kitchenString,
                    'etcimg' => $assetString,
                    'unit_id' => $unit->id,
                ]);

                $unit->images()->save($image);

                Specification::create([
                    'bedroom' => fake()->randomNumber(1,5),
                    'bathroom' => fake()->randomNumber(1,5),
                    'surface_area' => fake()->randomNumber(1,5),
                    'building_area' => fake()->randomNumber(1,5),
                    'floor' => fake()->randomNumber(1,5),
                    'unit_id' => $unit->id,
                ]);
            }
        }
    }



    private function getImageUrls($folderName, $count, $width = 400, $height = 300)
    {
        $imageUrls = [];
        
        for ($i = 0; $i < $count; $i++) {
            $files = File::files(public_path($folderName));
            $randomImagePath = Arr::random($files);
        
            $imagePath = $randomImagePath->getRealPath();
        
            $imageName = pathinfo($imagePath, PATHINFO_FILENAME) . '.' . $randomImagePath->getExtension();
        
            $imageUrls[] = $imageName;
        }

        foreach ($imageUrls as $imageName) {
            $imagePath = public_path($folderName . '/' . $imageName);

            Storage::delete('public/' . $folderName . '/' . $imageName);

            Storage::putFileAs('public/' , $imagePath, $imageName);
        }
        
        return $imageUrls;
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
