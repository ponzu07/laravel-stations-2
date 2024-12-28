<?php

namespace Database\Seeders;

use App\Models\Movie;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('ja_JP');
        $faker->addProvider(new FakerPicsumImagesProvider($faker));

        for ($i = 0; $i < 10; $i++) {
            Movie::create([
                'title' => mb_substr($faker->realText(20), 0, 20),
                'image_url' => $faker->imageUrl(800, 600),
            ]);
        }
    }
}
