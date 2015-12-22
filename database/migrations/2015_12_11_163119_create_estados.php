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
        //DB::unprepared(File::get(database_path().'/sql/venezuela.sql'));

        Schema::create('estados', function(Blueprint $table) {
            $table->increments('id');
            $table->string('estado');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('ciudades', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('estado_id')->unsigned();
            $table->string('ciudad');
            $table->boolean('capital');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('estado_id')->references('id')->on('estados');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ciudades');
        Schema::drop('estados');

        //Schema::drop('municipios');
        //Schema::drop('parroquias');
    }
}
