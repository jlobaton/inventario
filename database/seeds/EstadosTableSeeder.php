<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('estados')->truncate();
        \DB::table('estados')->insert(array(
        	'estado' => 'Lara'
        ));
    }
}
