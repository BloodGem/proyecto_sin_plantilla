<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultoriosTable extends Migration
{

    public function up()
    {
        Schema::create('consultorios', function (Blueprint $table) {
            $table->id();
            $table->integer('id_usuario');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('consultorio');
    }
}

