<?php

use Illuminate\Database\Seeder;

class InventarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//\DB::table('inventario')->truncate();
        \DB::table('inventario')->insert(array(
        	'descr' => 'cam-002',
        	'descr2' => '11111',
        	'video' => 'Ahorro',
        	'audio' => 'v-15668694',
        	'resolucion' => 'JESUS LOBATON',
        	'almacenamiento' => 'ventas@seguridadsistema.com.ve',
        	'audio' => '15668694',
        	'resolucion' => '5668694',
        	'almacenamiento' => '15668694',
        	'grabacion' => '15668694',
        	'general' => '15668694',
        	'exist' => '100',
        	'oferta' => '',
        	'precio' => '1000',
        	'estatus' => '1'
        	));
    }
}
