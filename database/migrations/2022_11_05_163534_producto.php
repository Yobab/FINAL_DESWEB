<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('id_producto');
            $table->string("codigo_producto", 45);
            $table->string("nombre", 45);
            $table->string("descripcion", 45)->nullable();
            $table->binary("imagen");
            $table->date("fecha_vencimiento");
            $table->dateTime("hora_registro");
            $table->unsignedBigInteger('id_marca');
            $table->foreign('id_marca')->references('id')->on('marca');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('producto');
    }
}
