<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SlideSeeder::class,
            ProductSeeder::class,
            GiftSeeder::class,
            MechanicSeeder::class,
            PostSeeder::class,
            VideoSeeder::class,
            ProfileSeeder::class,
        ]);
    }
}
