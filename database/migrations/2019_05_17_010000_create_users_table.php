<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_rol')->unsigned()->default(1);
            $table->string('name');
            $table->string('paterno')->nullable();
            $table->string('materno')->nullable();
            $table->string('genero')->nullable();
            $table->integer('telefono')->nullable();
            $table->integer('celular')->nullable(); 
            $table->integer('ci')->nullable();  
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('direccion')->nullable();
            $table->integer('estado')->default(1);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_rol')->references('idrol')->on('rols');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
