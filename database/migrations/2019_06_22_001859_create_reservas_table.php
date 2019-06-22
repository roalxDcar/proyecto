<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_centro')->unsigned();
            $table->integer('id_hora')->unsigned();
            $table->integer('id_dia')->unsigned();
            $table->integer('id_cancha')->unsigned();
            $table->integer('id_estado')->default(1);

            $table->string('nombre');

            $table->foreign('id_hora')->references('id')->on('horas');
            $table->foreign('id_dia')->references('id')->on('dias');
            $table->foreign('id_centro')->references('id')->on('centros');
            $table->foreign('id_cancha')->references('id')->on('canchas');
            $table->foreign('id_estado')->references('id')->on('estadoreservas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
