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
        //
        Schema::create('estudiantes', function (Blueprint $table) {
            // $table->id();
            $table->integer('id_estudiante');
            $table->string('Nombres', 100);
            $table->string('Apellidos', 100);
            $table->date('Fecha_Nacimiento');
            $table->integer('id_carrera');
            $table->string('Sexo', 15);
            $table->string('Estado Civil', 25);
            $table->string('Status',20);
            $table->integer('id_campus');
            $table->integer('id_pais');
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
        //
    }
};
