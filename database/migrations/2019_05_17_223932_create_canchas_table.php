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
            $table->integer('id_estado')->unsigned();
            $table->integer('id_centro')->unsigned();

            $table->string('nombre');
            $table->integer('costo');
            $table->string('descripcion')->nullable();

            $table->timestamps();

            $table->foreign('id_estado')->references('id')->on('estadocanchas');
            $table->foreign('id_centro')->references('id')->on('centros');
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
