<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Horarios extends Migration
{

    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->string("dia");
            $table->time("inicio");
            $table->time("finalizacion");
            $table->integer("id_odontologo");
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('horarios');
    }
}
