<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalledeportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalledeportes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_detallecancha')->unsigned();
            $table->integer('id_deporte')->unsigned();
            $table->string('observacion')->nullable();
            $table->timestamps();

            $table->foreign('id_detallecancha')->references('id')->on('detallecanchas');
            $table->foreign('id_deporte')->references('id')->on('deportes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalledeportes');
    }
}
