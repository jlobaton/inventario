<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnviados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enviados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ordenes_id')->unsigned();
            $table->date('fecha')->nullable();
            $table->string('nroguia',20)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('ordenes_id')->references('id')->on('ordenes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pruebas');
    }
}
