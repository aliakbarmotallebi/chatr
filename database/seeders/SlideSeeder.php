<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slide;
use Faker\Factory as Faker;

class SlideSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Slide::create([
                'title' => $faker->sentence(3),
                'subtitle' => $faker->sentence(5),
                'description' => $faker->paragraph(2),
                'image_url' => $faker->imageUrl(1920, 1080, 'business', true),
                'button_text' => $faker->word,
                'button_link' => $faker->url,
            ]);
        }
    }
}
