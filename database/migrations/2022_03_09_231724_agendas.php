<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Agendas extends Migration
{
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->datetime('dia_hora');
            $table->integer('id_odontologo');
            $table->integer('id_paciente');
            $table->string('estatus');
            $table->string('situacion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('agendas');
    }
}
