<?php

use Illuminate\Database\Seeder;
Use App\Banco;

class BancosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\DB::table('banco')->truncate();
        \DB::table('banco')->insert(array(
        	'nombre' => 'Provincial',
        	'nrocuenta' => '11111',
        	'tipocuenta' => 'Ahorro',
        	'cedula' => 'v-15668694',
        	'beneficiario' => 'JESUS LOBATON',
        	'email' => 'ventas@seguridadsistema.com.ve',
        	));

        \DB::table('banco')->insert(array(
        	'nombre' => 'Mercantil',
        	'nrocuenta' => '222222',
        	'tipocuenta' => 'Ahorro',
        	'cedula' => 'v-15668694',
        	'beneficiario' => 'JESUS LOBATON',
        	'email' => 'ventas@seguridadsistema.com.ve',
        	));

        \DB::table('banco')->insert(array(
        	'nombre' => 'Venezuela',
        	'nrocuenta' => '333333',
        	'tipocuenta' => 'Corriente',
        	'cedula' => 'v-15668694',
        	'beneficiario' => 'JESUS LOBATON',
        	'email' => 'ventas@seguridadsistema.com.ve',
        	));

        \DB::table('banco')->insert(array(
        	'nombre' => 'Tesoro',
        	'nrocuenta' => '444444',
        	'tipocuenta' => 'Ahorro',
        	'cedula' => 'v-15668694',
        	'beneficiario' => 'JESUS LOBATON',
        	'email' => 'ventas@seguridadsistema.com.ve',
        	));

        \DB::table('banco')->insert(array(
        	'nombre' => 'Banesco',
        	'nrocuenta' => '555555',
        	'tipocuenta' => 'Corriente',
        	'cedula' => 'v-XXXX',
        	'beneficiario' => 'JESUS LOBATON',
        	'email' => 'ventas@seguridadsistema.com.ve',
        	));
    }
}
