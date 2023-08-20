<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\PropertyAgent;
use App\Models\Property;
use App\Models\Province;
use App\Models\UnitStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\User;



class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Agent::truncate();

        $agentUserIds = User::where('role', 'agent')->pluck('id');
        foreach ($agentUserIds as $userId) {
            $agent = Agent::create([
                // 'name' => fake()->name(),
                // 'email' => fake()->email(),
                // 'password' => bcrypt(fake()->password()),
                'address' => fake()->address(),
                'ktp' => $this->getImageUrl('ktp'),
                'face' => $this->getImageUrl('face'),
                'telp' =>fake()->phoneNumber(),
            ]);

        // Ambil satu data province secara acak
        $province = Province::inRandomOrder()->first();

        // Hubungkan developer dengan province menggunakan attach()
        $agent->provinces()->attach($province->id);

        // Ambil satu data regency yang terhubung dengan province tersebut secara acak
        $regency = $province->regencies()->inRandomOrder()->first();

        // Hubungkan agent dengan regency menggunakan attach()
        $agent->regencies()->attach($regency->id);

        // Ambil satu data district yang terhubung dengan regency tersebut secara acak
        $district = $regency->districts()->inRandomOrder()->first();

        // Hubungkan agent dengan district menggunakan attach()
        $agent->districts()->attach($district->id);

        // Ambil satu data village yang terhubung dengan district tersebut secara acak
        $village = $district->villages()->inRandomOrder()->first();

        // Hubungkan agent dengan village menggunakan attach()
        $agent->villages()->attach($village->id);

        $agent->users()->attach($userId);
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

    private function generatePhoneNumber()
    {
        // Buat nomor telepon dengan format yang sesuai, misalnya: +62 812-3456-7890
        // Anda juga bisa menggunakan library lain seperti libphonenumber untuk membuat format yang lebih kompleks
        return '+62 ' . rand(800, 899) . '-' . rand(1000, 9999) . '-' . rand(1000, 9999);
    }
}
