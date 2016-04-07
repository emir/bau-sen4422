<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Finance',
            'Sport',
            'Magazine',
            'Politics',
            'Technology',
            'Art'
        ];

        foreach($categories as $category)
        {
            \App\Category::insert([
               'title' => $category
            ]);
        }
    }
}
