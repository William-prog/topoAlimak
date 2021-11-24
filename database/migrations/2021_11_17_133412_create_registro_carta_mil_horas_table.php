<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroCartaMilHorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_carta_mil_horas', function (Blueprint $table) {
            $table->id();

            $table->string('mil_Equipo');
            $table->string('mil_Marca');
            $table->string('mil_NumE');
            $table->string('mil_Fecha');
            
            $table->string('mil_Tipo');
            $table->string('mil_Horo');
            $table->string('mil_Horario');
            $table->string('mil_Turno');

            $table->string('mil_1_1');
            $table->string('mil_1_2');
            $table->string('mil_1_3');

            $table->string('mil_2_0');

            $table->string('mil_3_1');

            $table->string('mil_4_1');

            $table->string('mil_5_1');

            $table->string('mil_6_1');

            $table->string('mil_7_1');

            $table->string('mil_8_1');
            $table->string('mil_8_2');
            $table->string('mil_8_3');

            $table->string('mil_9_1');

            $table->string('mil_10_1');

            $table->string('observaciones_Form');
            $table->string('milOperadorForm');
            $table->string('milVerificadorForm');
            $table->string('milEncargadoForm');
            
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
        Schema::dropIfExists('registro_carta_mil_horas');
    }
}
