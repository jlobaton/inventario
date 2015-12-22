<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBancos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banco', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->unique();
            $table->string('nrocuenta',20);
            $table->string('tipocuenta',10);
            $table->string('cedula',12);
            $table->string('beneficiario');
            $table->string('email');
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
        Schema::drop('banco');
    }
}
