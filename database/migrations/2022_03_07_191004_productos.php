<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{

    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("producto");
            $table->string("stock_s");
            $table->string("stock_a");
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
