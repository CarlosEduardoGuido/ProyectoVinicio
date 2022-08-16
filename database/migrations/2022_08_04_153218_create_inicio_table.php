<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_inicio', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('mision');
            $table->string('vision');
            $table->string('valores');
            $table->string('descripcion');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->string('imagen');
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
        Schema::dropIfExists('inicio');
    }
};
