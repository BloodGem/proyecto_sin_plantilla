<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('imagen');
            $table->string('name');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->date('fecha_nacimiento');
            $table->string('rfc');
            $table->string('curp');
            $table->string('calle');
            $table->string('num_ext');
            $table->string('num_int');
            $table->string('colonia');
            $table->string('cp');
            $table->string('municipio');
            $table->string('email')->unique();
            $table->string('rol');
            $table->string('estatus');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
