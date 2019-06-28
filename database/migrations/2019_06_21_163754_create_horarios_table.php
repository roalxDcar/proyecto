<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_centro')->unsigned();
            $table->integer('id_turno')->unsigned();
            $table->integer('id_detalle_dia')->unsigned();
            $table->integer('estado')->default(1);
            $table->timestamps();
            $table->foreign('id_centro')->references('id')->on('centros');
            $table->foreign('id_turno')->references('id')->on('turnos');
            $table->foreign('id_detalle_dia')->references('id')->on('detalledias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
}
