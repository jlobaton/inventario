<?php

use Illuminate\Database\Seeder;

class CiudadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ciudades')->truncate();
        \DB::table('ciudades')->insert(array(
            'estado_id' => '1',
            'ciudad' => 'Barquisimeto',
            'capital' => '1'
            ));
    }
}
