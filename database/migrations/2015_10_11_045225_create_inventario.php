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
            $table->string('codpro',20)->unique();
            $table->string('descr');
            $table->string('descr2')->nullable();;
            $table->string('video')->nullable();
            $table->string('audio')->nullable();
            $table->string('resolucion')->nullable();
            $table->string('almacenamiento')->nullable();
            $table->string('grabacion')->nullable();
            $table->string('general')->nullable();
            $table->integer('exist');
            $table->boolean('oferta')->nullable();
            $table->decimal('precio',10,2);
            $table->boolean('estatus')->default(true); //Sirve para identificar si el producto se va a mostrar en la app movil
            $table->timestamps();
            $table->softDeletes();
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
