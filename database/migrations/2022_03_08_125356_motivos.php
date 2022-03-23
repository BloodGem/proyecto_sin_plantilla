<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Motivos extends Migration
{
    public function up()
    {
        Schema::create('motivos', function (Blueprint $table) {
            $table->id();
            $table->string("motivo");
            $table->string("descripcion");
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('motivos');
    }
}
