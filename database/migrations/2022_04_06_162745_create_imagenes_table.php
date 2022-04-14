<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->id();

            $table->date('imagenFecha')->nullable();
            $table->string('imagenFechaLarga')->nullable();
            $table->string('imagenFechaCorta')->nullable();

            $table->string('imagenTitulo')->nullable();
            $table->string('imagenDescripcion')->nullable();

            $table->string('imagenUrl')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagenes');
    }
}
