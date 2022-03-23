<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("apellido_p");
            $table->string("apellido_m");
            $table->string("rfc");
            $table->string("curp");
            $table->date("fecha_nacimiento");
            $table->string("calle");
            $table->string("num_int");
            $table->string("num_ext");
            $table->string("colonia");
            $table->string("municipio");
            $table->string("cp");
            $table->string("estado");
            $table->string("telefono");
            $table->string("celular");
            $table->integer("id_usuario");
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
        Schema::dropIfExists('pacientes');
    }
}
