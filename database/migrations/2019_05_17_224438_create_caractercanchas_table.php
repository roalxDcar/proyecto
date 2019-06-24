<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaractercanchasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caractercanchas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cancha')->unsigned();
            $table->string('foto');
            $table->timestamps();

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
        Schema::dropIfExists('caractercanchas');
    }
}
