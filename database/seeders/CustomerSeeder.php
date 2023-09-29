<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::truncate();
        
        for ($i = 0; $i < 10; $i++) {
            Customer::create([
                "email" => fake()->email(),
                "password" => bcrypt(fake()->password()),
                "name" => fake()->name(),
                "address" => fake()->address(),
                'telp' =>fake()->phoneNumber(),
            ]);
        }
    }

    private function generatePhoneNumber()
    {
        // Buat nomor telepon dengan format yang sesuai, misalnya: +62 812-3456-7890
        // Anda juga bisa menggunakan library lain seperti libphonenumber untuk membuat format yang lebih kompleks
        return '+62 ' . rand(800, 899) . '-' . rand(1000, 9999) . '-' . rand(1000, 9999);
    }
}
