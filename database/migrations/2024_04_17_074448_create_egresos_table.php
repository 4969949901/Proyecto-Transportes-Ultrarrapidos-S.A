<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_camion');
            $table->foreign('id_camion')->references('id')->on('camiones');
            $table->unsignedBigInteger('id_bodega_egreso');
            $table->foreign('id_bodega_egreso')->references('id')->on('bodegas');
            $table->dateTime('fecha_hora_egreso');
            $table->string('destino');
            $table->text('carga');
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
        Schema::dropIfExists('egresos');
    }
}
