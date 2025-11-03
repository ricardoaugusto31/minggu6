<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 100; $i++)
        {
            DB::table('movie')->insert([
                'imdb' => $faker->randomNumber(5, true),
                'title' => $faker->words(3, true),
                'genre' => $faker->word(),
                'year' => $faker->year(),
                'description' => $faker->text(),
                'poster' => $faker->image(null, 640, 480),
            ]);
        }
    }
}
