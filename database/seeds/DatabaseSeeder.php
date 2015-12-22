<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints
        $this->call(UserTableSeeder::class);
        $this->call(ConfiguracionTableSeeder::class);
        $this->call(EncomiendaTableSeeder::class);
        $this->call(BancosTableSeeder::class);
        $this->call(EstadosTableSeeder::class);
        $this->call(CiudadesTableSeeder::class);
        $this->call(InventarioTableSeeder::class);
        //$this->call(Gcm_UsersTableSeeder::class);
        $this->call(TipopagoTableSeeder::class);
        $this->call(OrdenesTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints
        Model::reguard();
    }
}
