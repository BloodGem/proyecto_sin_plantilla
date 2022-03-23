<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Odontologos extends Migration
{

    public function up()
    {
        Schema::create('odontologos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_o");
            $table->string("apellido_p_o");
            $table->string("apellido_m_o");
            $table->string("rfc_o");
            $table->string("curp_o");
            $table->date("fecha_nacimiento_o");
            $table->string("calle_o");
            $table->string("num_int_o");
            $table->string("num_ext_o");
            $table->string("colonia_o");
            $table->string("cp_o");
            $table->string("municipio_o");
            $table->string("estado_o");
            $table->string("telefono_o");
            $table->string("celular_o");
            $table->integer("id_usuario_o");
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('odontologos');
    }
}
