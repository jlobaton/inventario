<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared(File::get(database_path().'/sql/venezuela.sql'));

/*
        Schema::create('estado', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('ciudad', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('estado_id')->unsigned();
            $table->string('nombre');
            $table->boolean('capital');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('estado_id')->references('id')->on('estado');
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
        Schema::drop('ciudad');
        Schema::drop('estado');
        //Schema::drop('municipios');
        //Schema::drop('parroquias');
    }
}
