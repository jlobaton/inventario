<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracion', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('estatus')->unsigned();
            $table->string('titulo');
            $table->string('mensaje');
            $table->string('urlimg');
            $table->timestamps();
            $table->softDeletes();
        });
/*
        #PARA REGISTRAR LOS DISPOSITIVOS QUE INSTALARON LA APP
        Schema::create('gcm_users', function (Blueprint $table){
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->timestamps();
        });
*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracion');
  //      Schema::dropIfExists('gcm_users');

    }
}
