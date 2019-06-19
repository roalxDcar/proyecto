<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaTable extends Migration
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
            $table->integer('id_user')->unsigned();
            $table->integer('id_cancha')->unsigned();
            $table->integer('id_estado')->unsigned();
            $table->string('nombre_reserva');
            $table->date('fecha_actual');
            $table->date('hora_inicio');
            $table->date('hora_salida');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_cancha')->references('id')->on('canchas');
            $table->foreign('id_estado')->references('id')->on('estadopagos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}
