<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvImag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_imag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inventario_id')->unsigned();
            $table->string('codpro',20)->unique();
            $table->string('urlimagen',100);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('inventario_id')->references('id')->on('inventario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inv_imag');
    }
}
