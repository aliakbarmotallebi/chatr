<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); // ایجاد شیء Faker برای تولید داده‌های جعلی

        // وارد کردن 10 داده جعلی به جدول videos
        foreach (range(1, 10) as $index) {
            DB::table('gifts')->insert([
                'title' => $faker->sentence(3), // عنوان ویدیو (۳ کلمه)
                'code' => $faker->unique()->word, // کد منحصر به فرد
                'image' => $faker->imageUrl(640, 480, 'tech', true), // لینک تصویر (تصویر واقعی از اینترنت)
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
