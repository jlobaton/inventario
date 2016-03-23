<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateOrdeneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ordenes', function (Blueprint $table) {
           $table->boolean('suscribir')->default(true)->after('estatus');
           $table->boolean('seguro')->default(true)->after('envobser');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ordenes', function ($table) {
            $table->dropColumn(['suscribir','seguro']);
        });
    }
}
