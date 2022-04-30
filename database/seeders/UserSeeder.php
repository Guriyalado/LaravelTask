<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $faker=Faker::create();
        foreach(range(1,25) as $value)
        {
        	DB::table('registers')->insert(['firstname'=>$faker->firstname(),
        		'lastname'=>$faker->lastname(),
        		'email'=>$faker->email().'@gmail.com',
        		'password'=>$faker->password(),
        		'date'=>$faker->date(),
        		'gender'=>$faker->randomElement(['male', 'female','other']),
        		'income'=>$faker->randomFloat(2),
        		'occupation'=>$faker->randomElement(['Private job', 'goverment job','other']),
        		'family'=>$faker->randomElement(['Nuclear Family', 'Joint Family','other']),
        		'manglik'=>$faker->randomElement(['yes', 'No']),

        	]);
        }
}


}
