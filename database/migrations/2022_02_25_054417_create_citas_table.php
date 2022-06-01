<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_citas', function (Blueprint $table) {
            $table->id();
            $table->string('hora_cita',6);
            $table->string('cita');
            $table->string('usuario');
            $table->string('asunto',150);
            $table->integer('id_doctor');
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
        Schema::dropIfExists('tb_citas');
    }
}
