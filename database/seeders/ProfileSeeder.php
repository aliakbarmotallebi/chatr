<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // تعداد رکوردهایی که می‌خواهیم در جدول profiles وارد کنیم
        for ($i = 0; $i < 10; $i++) {
            DB::table('profiles')->insert([
                'username' => $faker->userName, // نام کاربری اینستاگرام
                'instagram_id' => $faker->unique()->userName, // شناسه کاربر
                'images_url' => json_encode([$faker->imageUrl, $faker->imageUrl]), // ایجاد چندین لینک تصویر
                'content' => $faker->paragraph, // محتوای نظر
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
