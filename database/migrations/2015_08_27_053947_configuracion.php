<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Configuracion extends Migration
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
        });

        Schema::create('gcm_users', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('configuracion');
    }
}
