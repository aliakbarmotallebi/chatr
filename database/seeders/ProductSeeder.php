<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); // ایجاد شیء faker برای تولید داده‌های جعلی

        // وارد کردن 10 داده جعلی به جدول videos
        foreach (range(1, 10) as $index) {
            DB::table('products')->insert([
                'title' => $faker->sentence(5), // عنوان ویدیو (5 کلمه)
                'description' => $faker->paragraph, // توضیحات ویدیو
                'image_url' => $faker->imageUrl(640, 480, 'video'), // لینک تصویر
                'wva' => $faker->word, // مقدار اختیاری wva
                'size' => $faker->randomElement(['small', 'medium', 'large']), // اندازه ویدیو
                'additional_images' => json_encode([
                    $faker->imageUrl(640, 480, 'video'),
                    $faker->imageUrl(640, 480, 'nature'),
                ]), // لینک تصاویر اضافی (در قالب JSON)
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
