<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrdenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('ordenes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('seudonimo');
            $table->string('correo');
            $table->integer('cantidad');
            $table->integer('inventario_id')->unsigned();
            $table->integer('tipopago_id')->unsigned();
            $table->string('bancorigen');
            $table->integer('banco_id')->unsigned();
            $table->date('fecha');
            $table->integer('monto');
            $table->string('obser');
            $table->string('envnombre');
            $table->string('envcedula');
            $table->string('envtele');
            $table->integer('encomienda_id')->unsigned();
            $table->string('envdirec');
            $table->integer('estado_id')->unsigned();
            $table->integer('ciudad_id')->unsigned();
            $table->text('envobser');
            $table->string('estatus')->default('Por Enviar'); //Sirve para controlar si se envio el producto
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('inventario_id')->references('id')->on('inventario');
            $table->foreign('banco_id')->references('id')->on('banco');
            $table->foreign('encomienda_id')->references('id')->on('encomienda')->onDelete('cascade');
            $table->foreign('estado_id')->references('id')->on('estado');
            $table->foreign('ciudad_id')->references('id')->on('ciudad');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ordenes');
    }
}
