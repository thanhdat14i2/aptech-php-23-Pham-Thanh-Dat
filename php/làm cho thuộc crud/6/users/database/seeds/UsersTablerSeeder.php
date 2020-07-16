<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTablerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<10;$i++){
            User::create([
                'name'=>$faker->name(),
                'email'=>$faker->safeEmail,
                'password'=>bcrypt($faker->password())
            ]);
        }
    }
}
