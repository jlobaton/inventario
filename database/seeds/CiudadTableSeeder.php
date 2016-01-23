<?php

use Illuminate\Database\Seeder;

class CiudadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ciudad')->truncate();
        \DB::table('ciudad')->insert(array(
            'estado_id' => '1',
            'nombre' => 'Barquisimeto',
            'capital' => '1'
            ));
    }
}
