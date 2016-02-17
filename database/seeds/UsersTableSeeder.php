<?php

use Faker\Factory as Faker;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

				foreach (range(1, 30) as $index) 
				{
					User::create([
						'first_name' => $faker->firstName(), 
						'last_name' => $faker->lastName(), 
						'email'	=> $faker->email(),
						'password' => bcrypt('secret'),
            'hourly_rate' => $faker->numberBetween(25, 250)
					]);
				}
    }
}
