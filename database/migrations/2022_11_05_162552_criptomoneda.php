<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Criptomoneda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criptomoneda', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("logotipo", 105);
            $table->string("nombre", 75);
            $table->float("precio");
            $table->string("descripcion", 200)->nullable();
            $table->unsignedBigInteger('lenguaje_id');
            $table->foreign('lenguaje_id')->references('id')->on('lenguaje_programacion');
            $table->date("fecha_creacion");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('criptomoneda');
    }
}

