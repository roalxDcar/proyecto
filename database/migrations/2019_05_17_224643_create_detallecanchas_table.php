<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallecanchasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallecanchas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_centro')->unsigned();
            $table->integer('id_cancha')->unsigned();
            $table->string('observacion')->nullable();
            $table->timestamps();

            $table->foreign('id_centro')->references('id')->on('centros');
            $table->foreign('id_cancha')->references('id')->on('canchas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallelocales');
    }
}
