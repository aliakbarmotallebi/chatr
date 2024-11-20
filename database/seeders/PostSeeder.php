<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); // ایجاد شیء Faker برای تولید داده‌های جعلی

        // وارد کردن 10 داده جعلی به جدول blog_posts
        foreach (range(1, 10) as $index) {
            DB::table('blog_posts')->insert([
                'title' => $faker->sentence, // عنوان پست
                'subtitle' => $faker->sentence, // زیرعنوان پست
                'content' => $faker->paragraphs(3, true), // محتوای پست به صورت چند پاراگراف
                'image_url' => $faker->imageUrl(640, 480, 'business', true), // URL تصویر
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
