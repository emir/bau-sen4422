<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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

        for($i = 0; $i <= 200; $i++)
        {
            \App\User::insert([
                'name' => $test->name(),
                'email' => $test->email(),
                'password' => \Illuminate\Support\Facades\Hash::make('123456'),
            ]);
        }
    }
}
