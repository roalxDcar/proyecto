<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanchasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canchas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_deporte')->unsigned();
            $table->integer('id_estado')->unsigned();
            $table->string('nombre');
            $table->integer('costo');
            $table->string('descripcion')->nullable();
            $table->integer('valoracion')->nullable();

            $table->timestamps();

            $table->foreign('id_deporte')->references('id')->on('deportes');
            $table->foreign('id_estado')->references('id')->on('estadocanchas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canchas');
    }
}
