<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\AgentProperty;
use App\Models\Property;
use App\Models\UnitStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;


class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Agent::truncate();
        AgentProperty::truncate();

        for ($i = 0; $i < 10; $i++) {
            $agent = Agent::create([
                'name' => fake()->name(),
                'email' => fake()->email(),
                'password' => bcrypt(fake()->password()),
                'address' => Str::limit(fake()->address()),
                'ktp' => $this->getImageUrl('ktp'),
                'face' => $this->getImageUrl('face'),
                'telp' => fake()->phoneNumber(),
                'location_id' => mt_rand(1, 34),
            ]);

            $propertyIds = Property::pluck('id')->random(rand(2, 5))->toArray();
            $agent->properties()->sync($propertyIds);
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
