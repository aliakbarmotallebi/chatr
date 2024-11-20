<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); // ایجاد شیء faker برای تولید داده‌های جعلی

        // وارد کردن 10 داده جعلی به جدول videos
        foreach (range(1, 10) as $index) {
            DB::table('videos')->insert([
                'name' => $faker->name, // نام فرد
                'title' => $faker->sentence, // عنوان ویدیو
                'video_url' => $faker->url, // لینک ویدیو
                'image_url' => $faker->imageUrl(640, 480, 'video'), // لینک تصویر
            ]);
        }
    }
}
