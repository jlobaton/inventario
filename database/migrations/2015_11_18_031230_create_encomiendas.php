<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncomiendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encomienda', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100)->unique();
            $table->text('observacion');
            $table->string('urltracking');
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
        Schema::drop('encomienda');
        //Schema::dropIfExists('encomienda');
    }
}
