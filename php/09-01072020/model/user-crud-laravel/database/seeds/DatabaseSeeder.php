<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i<10;$i++){
            DB::table('articles')->insert([
                'title' => $faker->text(50),
                'description' => $faker->text(200),
                'content' => $faker->text(200)
            ]);
        }
    }
}
