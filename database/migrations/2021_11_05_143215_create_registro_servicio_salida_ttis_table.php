<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroServicioSalidaTtisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_servicio_salida_ttis', function (Blueprint $table) {
            $table->id();
            $table->string('codigoIdentificador');
            $table->string('fechaRegistroSalida');
            $table->string('finalTurnoSalida');
            $table->string('cantidadSalida');
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
        Schema::dropIfExists('registro_servicio_salida_ttis');
    }
}
