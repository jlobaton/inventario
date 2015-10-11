<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('codpro')->unique();
            $table->string('descr');
            $table->string('descr2');
            $table->string('video');
            $table->string('audio');
            $table->string('resolucion');
            $table->string('almacenamiento');
            $table->string('grabacion');
            $table->string('general');
            $table->integer('exist');
            $table->boolean('oferta');
            $table->decimal('precio',10,2);
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
         Schema::drop('inventario');
    }
}
