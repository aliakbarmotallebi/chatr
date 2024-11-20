<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MechanicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); // ایجاد شیء Faker برای تولید داده‌های جعلی

        // وارد کردن 10 داده جعلی به جدول mechanics
        foreach (range(1, 10) as $index) {
            DB::table('mechanics')->insert([
                'name' => $faker->company, // نام تعمیرکار (نام شرکت به عنوان تعمیرکار)
                'location' => $faker->city, // موقعیت (شهر)
                'address' => $faker->address, // آدرس
                'phone' => $faker->phoneNumber, // شماره تلفن
                'image_url' => $faker->imageUrl(640, 480, 'business', true), // URL تصویر
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
