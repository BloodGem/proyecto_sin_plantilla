<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fichas extends Migration
{
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->integer("id_paciente");
            $table->string("motivo");
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('fichas');
    }
}
