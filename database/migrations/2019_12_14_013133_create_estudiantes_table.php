<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('sexo');
            $table->unsignedBigInteger('tipo_id');
             $table->foreign('tipo_id')->references('id')->on('semestres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
