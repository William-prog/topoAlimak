<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroServicioEntradaCoymsasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_servicio_entrada_coymsas', function (Blueprint $table) {
            $table->id();
            $table->string('codigoIdentificador');
            $table->string('fechaRegistroEntrada');
            $table->string('finalTurnoEntrada');
            $table->string('cantidadEntrada');
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
        Schema::dropIfExists('registro_servicio_entrada_coymsas');
    }
}
