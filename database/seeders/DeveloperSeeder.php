<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use App\Models\Developer;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
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
        $developerUserIds = User::where('role', 'developer')->pluck('id');  
        foreach ($developerUserIds as $userId) {
            $licenseImages = $this->getImageUrls('license', 3);
            $licenseString = implode('|', $licenseImages); // Menggabungkan array nama file gambar menjadi satu string dipisahkan koma

            $developer = Developer::create([
                'company' => fake()->company(),
                'company_email' => fake()->email(),
                'company_password' => bcrypt(fake()->password()),
                'address' => fake()->address(),
                'license' => $licenseString,
                'ktp' => $this->getImageUrls('ktp', 1)[0],
                'face' => $this->getImageUrls('face', 1)[0],
                'telp' => fake()->phoneNumber(),
            ]);

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

            $developer->users()->attach($userId);
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
            Storage::putFileAs('public/', $imagePath, $imageName);
        }

        return $imageUrls;
    }

    // private function generatePhoneNumber()
    // {
    //     // Buat nomor telepon dengan format yang sesuai, misalnya: +62 812-3456-7890
    //     // Anda juga bisa menggunakan library lain seperti libphonenumber untuk membuat format yang lebih kompleks
    //     return '+62 ' . rand(800, 899) . '-' . rand(1000, 9999) . '-' . rand(1000, 9999);
    // }

}
