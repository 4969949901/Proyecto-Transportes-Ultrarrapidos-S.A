<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_camion');
            $table->foreign('id_camion')->references('id')->on('camiones');
            $table->unsignedBigInteger('id_bodega_ingreso');
            $table->foreign('id_bodega_ingreso')->references('id')->on('bodegas');
            $table->dateTime('fecha_hora_ingreso');
            $table->string('piloto');
            $table->string('origen');
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
        Schema::dropIfExists('ingresos');
    }
}
