<?php

use Illuminate\Database\Seeder;

class TipopagoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('tipopago')->truncate();
        \DB::table('tipopago')->insert(array(
        	'nombre' => 'Transferencia',
        	));
        \DB::table('tipopago')->insert(array(
        	'nombre' => 'Deposito',
        	));
        \DB::table('tipopago')->insert(array(
        	'nombre' => 'Mercado Pago',
        	));
    }
}
