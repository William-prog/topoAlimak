<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateRegistroCartaCuarentaHorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_carta_cuarenta_horas', function (Blueprint $table) {
            $table->id();

            $table->string('cuarenta_Equipo');
            $table->string('cuarenta_Marca');
            $table->string('cuarenta_NumE');
            $table->string('cuarenta_Fecha');
            $table->string('cuarenta_Tipo');
            $table->string('cuarenta_Horo');
            $table->string('cuarenta_Horario');
            $table->string('cuarenta_Turno');

            $table->string('cuarenta_1_1');
            $table->string('cuarenta_1_2');
            $table->string('cuarenta_1_3');

            $table->string('cuarenta_2_0');
            $table->string('cuarenta_2_1');
            $table->string('cuarenta_2_2');
            $table->string('cuarenta_2_3');

            $table->string('cuarenta_3_1');

            $table->string('cuarenta_4_1');
            $table->string('cuarenta_4_2');

            $table->string('cuarenta_5_1');

            $table->string('cuarenta_6_1');

            $table->string('cuarenta_7_1');
            $table->string('cuarenta_7_2');

            $table->string('cuarenta_8_1');

            $table->string('cuarenta_9_1');

            $table->string('cuarenta_10_1');
            $table->string('cuarenta_10_2');

            $table->string('cuarenta_11_1');
            $table->string('cuarenta_11_2');
            $table->string('cuarenta_11_3');
            $table->string('cuarenta_11_4');
            $table->string('cuarenta_11_5');
            $table->string('cuarenta_11_6');

            $table->string('cuarenta_12_1');

            $table->string('cuarenta_13_1');

            $table->string('observaciones_Form');
            $table->string('cuarentaOperadorForm');
            $table->string('cuarentaVerificadorForm');
            $table->string('cuarentaEncargadoForm');

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
        Schema::dropIfExists('registro_carta_cuarenta_horas');
    }
}
