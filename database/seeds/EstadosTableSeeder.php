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
        \DB::table('estado')->truncate();
        \DB::table('estado')->insert(array(
        	'nombre' => 'Lara'
        ));
    }
}
