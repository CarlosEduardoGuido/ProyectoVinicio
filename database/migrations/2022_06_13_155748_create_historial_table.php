<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_historial', function (Blueprint $table) {
            $table->id();
            $table->integer('id_cita');
            $table->string('descripcion',255);
            $table->string('prescripciones',30);
            $table->string('observaciones',255);
            $table->string('receta',255);
            $table->string('condicion',30);
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
        Schema::dropIfExists('historial');
    }
}
