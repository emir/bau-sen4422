<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new Factory();
        $test = $faker->create();

        for($i = 0; $i <= 100; $i++)
        {
            \App\News::insert([
                'title' => $test->sentence(),
                'body' => $test->paragraph(rand(10, 15)),
                'author_id' => rand(1, 201)
            ]);
        }
    }
}
