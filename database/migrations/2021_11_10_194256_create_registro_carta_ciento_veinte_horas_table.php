<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroCartaCientoVeinteHorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_carta_ciento_veinte_horas', function (Blueprint $table) {
            $table->id();
            $table->string('cientoVeinte_Equipo');
            $table->string('cientoVeinte_NumE');
            $table->string('cientoVeinte_Fecha');
            $table->string('cientoVeinte_Tipo');
            $table->string('cientoVeinte_Horo');
            $table->string('cientoVeinte_Horario');
            $table->string('cientoVeinte_Turno');

            $table->string('cientoVeinte_1_1');
            $table->string('cientoVeinte_2_1');
            $table->string('cientoVeinte_3_1');

            $table->string('cientoVeinte_3_2');
            $table->string('cientoVeinte_3_3');
            $table->string('cientoVeinte_3_4');
            $table->string('cientoVeinte_4_1');

            $table->string('cientoVeinte_5_1');

            $table->string('cientoVeinte_5_2');
            $table->string('cientoVeinte_5_3');

            $table->string('cientoVeinte_5_4');

            $table->string('cientoVeinte_5_5');

            $table->string('cientoVeinte_6_1');
            $table->string('cientoVeinte_7_1');

            $table->string('cientoVeinte_8_1');

            $table->string('cientoVeinte_9_1');

            $table->string('cientoVeinte_10_1');

            $table->string('cientoVeinte_11_1');

            $table->string('cientoVeinte_12_1');
            $table->string('cientoVeinte_13_1');
            $table->string('cientoVeinte_14_1');
            $table->string('cientoVeinte_15_1');
            $table->string('cientoVeinte_16_1');
            $table->string('cientoVeinte_16_2');

            $table->string('cientoVeinte_16_3');

            $table->string('cientoVeinte_16_4');
            $table->string('cientoVeinte_17_1');
            $table->string('cientoVeinte_17_2');
            $table->string('cientoVeinte_18_1');
            $table->string('cientoVeinte_19_1');
            $table->string('cientoVeinte_20_1');
            $table->string('cientoVeinte_20_2');

            $table->string('cientoVeinteObservacionesForm');
            $table->string('cientoVeinteOperadorForm');
            $table->string('cientoVeinteVerificadorForm');
            $table->string('cientoVeinteEncargadoForm');
            
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
        Schema::dropIfExists('registro_carta_ciento_veinte_horas');
    }
}
