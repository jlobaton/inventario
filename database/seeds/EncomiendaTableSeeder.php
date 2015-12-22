<?php

use Illuminate\Database\Seeder;

class EncomiendaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('encomienda')->truncate();
        \DB::table('encomienda')->insert(array(
            'nombre' => 'Zoom',
            'observacion' => 'Disculpe...',
            'urltracking' => 'http://',
            ));

        \DB::table('encomienda')->insert(array(
            'nombre' => 'Mrw',
            'observacion' => 'Disculpe...',
            'urltracking' => 'http://',
            ));
    }
}