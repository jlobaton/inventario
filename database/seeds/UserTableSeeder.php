<?php

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
        \DB::table('users')->truncate();
        \DB::table('users')->insert(array(
            'name' => 'jlobaton',
            'email' => 'jlobaton@gmail.com',
            'password' => \Hash::make('secret')
            ));
    }
}
