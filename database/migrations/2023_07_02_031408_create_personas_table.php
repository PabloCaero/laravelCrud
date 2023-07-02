<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id(); //CAMPO CLAVE
            //SE CREAN LOS CAMPOS
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->date('fecha_nacimiento');
            $table->timestamps(); //ESTO ES PARA QUE SE ACTUALICE
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
