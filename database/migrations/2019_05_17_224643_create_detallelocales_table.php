<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallelocalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallelocales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_centro')->unsigned();
            $table->integer('id_local')->unsigned();
            $table->string('observacion')->nullable();
            $table->timestamps();

            $table->foreign('id_centro')->references('id')->on('centros');
            $table->foreign('id_local')->references('id')->on('locales');
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
