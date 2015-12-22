<?php

use Illuminate\Database\Seeder;

class ConfiguracionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('configuracion')->truncate();
        \DB::table('configuracion')->insert(array(
            'estatus' => '1',
            'titulo' => 'Disculpe...',
            'mensaje' => 'Pagina en Mantenimiento',
            'urlimg' => 'https://'
            ));

    }
}
