<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        \DB::table('users')->truncate();
        \DB::table('users')->insert(array(
            'name'      => 'jlobaton',
            'email'     => 'jlobaton@gmail.com',
            'password'  => \Hash::make('123'),
            'tipo'      => 'admin'
            ));

        foreach (range(1,5) as $value)
        {
            \DB::table('users')->insert(array(
                'name'      => $faker->userName,
                'email'     => $faker->unique()->email,
                'password'  => \Hash::make('123'),
                'tipo'      => 'usuario'
                ));
        }
    }
}
