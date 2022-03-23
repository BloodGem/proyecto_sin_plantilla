<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gastos extends Migration
{
    public function up()
    {
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
            $table->string("categoria");
            $table->string("detalle");
            $table->date("fecha_pago");
            $table->date("fecha_factura");
            $table->double("total");
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('gastos');
    }
}
