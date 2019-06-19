<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_detalle')->unsigned();
            $table->string('nombre');
            $table->integer('telefono');
            $table->string('ubicacion');
            $table->string('foto')->nullable();

            $table->rememberToken();
            $table->timestamps();
            
            $table->foreign('id_detalle')->references('id')->on('detallecentros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
