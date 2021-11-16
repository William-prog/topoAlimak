<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroCheckListSeguridadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_check_list_seguridads', function (Blueprint $table) {
            $table->id();
            
            $table->string('cls_Activadad');
            $table->string('cls_Depto');
            $table->string('cls_Ubicacion');

            $table->string('cls_Turno');
            $table->string('cls_Horario');
            $table->string('cls_Fecha');

            $table->string('cls_Verificador');
            $table->string('cls_Categoria');
            $table->string('cls_Encargado');

            $table->string('cls_opcion_1_Ubic_1');
            $table->string('cls_opcion_2_Ubic_2');
            $table->string('cls_opcion_3_Ubic_3');
            $table->string('cls_opcion_4_Ubic_4');

            $table->string('cls_opcion_1_Evaluacion_1');
            $table->string('cls_opcion_1_Evaluacion_2');
            $table->string('cls_opcion_1_Evaluacion_3');
            $table->string('cls_opcion_1_Evaluacion_4');

            $table->string('cls_opcion_2_Evaluacion_1');
            $table->string('cls_opcion_2_Evaluacion_2');
            $table->string('cls_opcion_2_Evaluacion_3');
            $table->string('cls_opcion_2_Evaluacion_4');

            $table->string('cls_opcion_3_Evaluacion_1');
            $table->string('cls_opcion_3_Evaluacion_2');
            $table->string('cls_opcion_3_Evaluacion_3');
            $table->string('cls_opcion_3_Evaluacion_4');

            $table->string('cls_opcion_4_Evaluacion_1');
            $table->string('cls_opcion_4_Evaluacion_2');
            $table->string('cls_opcion_4_Evaluacion_3');
            $table->string('cls_opcion_4_Evaluacion_4');

            $table->string('cls_opcion_5_Evaluacion_1');
            $table->string('cls_opcion_5_Evaluacion_2');
            $table->string('cls_opcion_5_Evaluacion_3');
            $table->string('cls_opcion_5_Evaluacion_4');

            $table->string('cls_opcion_6_Evaluacion_1');
            $table->string('cls_opcion_6_Evaluacion_2');
            $table->string('cls_opcion_6_Evaluacion_3');
            $table->string('cls_opcion_6_Evaluacion_4');

            $table->string('cls_opcion_7_Evaluacion_1');
            $table->string('cls_opcion_7_Evaluacion_2');
            $table->string('cls_opcion_7_Evaluacion_3');
            $table->string('cls_opcion_7_Evaluacion_4');

            $table->string('cls_opcion_8_Evaluacion_1');
            $table->string('cls_opcion_8_Evaluacion_2');
            $table->string('cls_opcion_8_Evaluacion_3');
            $table->string('cls_opcion_8_Evaluacion_4');

            $table->string('cls_opcion_9_Evaluacion_1');
            $table->string('cls_opcion_9_Evaluacion_2');
            $table->string('cls_opcion_9_Evaluacion_3');
            $table->string('cls_opcion_9_Evaluacion_4');

            $table->string('cls_opcion_10_Evaluacion_1');
            $table->string('cls_opcion_10_Evaluacion_2');
            $table->string('cls_opcion_10_Evaluacion_3');
            $table->string('cls_opcion_10_Evaluacion_4');

            $table->string('cls_opcion_11_Evaluacion_1');
            $table->string('cls_opcion_11_Evaluacion_2');
            $table->string('cls_opcion_11_Evaluacion_3');
            $table->string('cls_opcion_11_Evaluacion_4');

            $table->string('cls_opcion_12_Evaluacion_1');
            $table->string('cls_opcion_12_Evaluacion_2');
            $table->string('cls_opcion_12_Evaluacion_3');
            $table->string('cls_opcion_12_Evaluacion_4');

            $table->string('cls_opcion_13_Evaluacion_1');
            $table->string('cls_opcion_13_Evaluacion_2');
            $table->string('cls_opcion_13_Evaluacion_3');
            $table->string('cls_opcion_13_Evaluacion_4');

            $table->string('cls_opcion_14_Evaluacion_1');
            $table->string('cls_opcion_14_Evaluacion_2');
            $table->string('cls_opcion_14_Evaluacion_3');
            $table->string('cls_opcion_14_Evaluacion_4');

            $table->string('cls_opcion_15_Evaluacion_1');
            $table->string('cls_opcion_15_Evaluacion_2');
            $table->string('cls_opcion_15_Evaluacion_3');
            $table->string('cls_opcion_15_Evaluacion_4');

            $table->string('cls_opcion_16_Evaluacion_1');
            $table->string('cls_opcion_16_Evaluacion_2');
            $table->string('cls_opcion_16_Evaluacion_3');
            $table->string('cls_opcion_16_Evaluacion_4');

            $table->string('cls_opcion_17_Evaluacion_1');
            $table->string('cls_opcion_17_Evaluacion_2');
            $table->string('cls_opcion_17_Evaluacion_3');
            $table->string('cls_opcion_17_Evaluacion_4');

            $table->string('cls_opcion_18_Evaluacion_1');
            $table->string('cls_opcion_18_Evaluacion_2');
            $table->string('cls_opcion_18_Evaluacion_3');
            $table->string('cls_opcion_18_Evaluacion_4');

            $table->string('cls_opcion_19_Evaluacion_1');
            $table->string('cls_opcion_19_Evaluacion_2');
            $table->string('cls_opcion_19_Evaluacion_3');
            $table->string('cls_opcion_19_Evaluacion_4');

            $table->string('cls_opcion_20_Evaluacion_1');
            $table->string('cls_opcion_20_Evaluacion_2');
            $table->string('cls_opcion_20_Evaluacion_3');
            $table->string('cls_opcion_20_Evaluacion_4');

            $table->string('cls_opcion_21_Evaluacion_1');
            $table->string('cls_opcion_21_Evaluacion_2');
            $table->string('cls_opcion_21_Evaluacion_3');
            $table->string('cls_opcion_21_Evaluacion_4');

            $table->string('cls_opcion_22_Evaluacion_1');
            $table->string('cls_opcion_22_Evaluacion_2');
            $table->string('cls_opcion_22_Evaluacion_3');
            $table->string('cls_opcion_22_Evaluacion_4');

            $table->string('cls_opcion_23_Evaluacion_1');
            $table->string('cls_opcion_23_Evaluacion_2');
            $table->string('cls_opcion_23_Evaluacion_3');
            $table->string('cls_opcion_23_Evaluacion_4');

            $table->string('cls_opcion_24_Evaluacion_1');
            $table->string('cls_opcion_24_Evaluacion_2');
            $table->string('cls_opcion_24_Evaluacion_3');
            $table->string('cls_opcion_24_Evaluacion_4');

            $table->string('cls_opcion_25_Evaluacion_1');
            $table->string('cls_opcion_25_Evaluacion_2');
            $table->string('cls_opcion_25_Evaluacion_3');
            $table->string('cls_opcion_25_Evaluacion_4');

            $table->string('cls_opcion_26_Evaluacion_1');
            $table->string('cls_opcion_26_Evaluacion_2');
            $table->string('cls_opcion_26_Evaluacion_3');
            $table->string('cls_opcion_26_Evaluacion_4');

            $table->string('cls_opcion_27_Evaluacion_1');
            $table->string('cls_opcion_27_Evaluacion_2');
            $table->string('cls_opcion_27_Evaluacion_3');
            $table->string('cls_opcion_27_Evaluacion_4');

            $table->string('cls_opcion_28_Evaluacion_1');
            $table->string('cls_opcion_28_Evaluacion_2');
            $table->string('cls_opcion_28_Evaluacion_3');
            $table->string('cls_opcion_28_Evaluacion_4');

            $table->string('cls_opcion_29_Evaluacion_1');
            $table->string('cls_opcion_29_Evaluacion_2');
            $table->string('cls_opcion_29_Evaluacion_3');
            $table->string('cls_opcion_29_Evaluacion_4');

            $table->string('cls_opcion_30_Evaluacion_1');
            $table->string('cls_opcion_30_Evaluacion_2');
            $table->string('cls_opcion_30_Evaluacion_3');
            $table->string('cls_opcion_30_Evaluacion_4');

            $table->string('cls_opcion_31_Evaluacion_1');
            $table->string('cls_opcion_31_Evaluacion_2');
            $table->string('cls_opcion_31_Evaluacion_3');
            $table->string('cls_opcion_31_Evaluacion_4');

            $table->string('cls_opcion_32_Evaluacion_1');
            $table->string('cls_opcion_32_Evaluacion_2');
            $table->string('cls_opcion_32_Evaluacion_3');
            $table->string('cls_opcion_32_Evaluacion_4');

            $table->string('cls_opcion_33_Evaluacion_1');
            $table->string('cls_opcion_33_Evaluacion_2');
            $table->string('cls_opcion_33_Evaluacion_3');
            $table->string('cls_opcion_33_Evaluacion_4');

            $table->string('cls_opcion_34_Evaluacion_1');
            $table->string('cls_opcion_34_Evaluacion_2');
            $table->string('cls_opcion_34_Evaluacion_3');
            $table->string('cls_opcion_34_Evaluacion_4');

            $table->string('cls_opcion_35_Evaluacion_1');
            $table->string('cls_opcion_35_Evaluacion_2');
            $table->string('cls_opcion_35_Evaluacion_3');
            $table->string('cls_opcion_35_Evaluacion_4');

            $table->string('cls_opcion_36_Evaluacion_1');
            $table->string('cls_opcion_36_Evaluacion_2');
            $table->string('cls_opcion_36_Evaluacion_3');
            $table->string('cls_opcion_36_Evaluacion_4');

            $table->string('cls_opcion_37_Evaluacion_1');
            $table->string('cls_opcion_37_Evaluacion_2');
            $table->string('cls_opcion_37_Evaluacion_3');
            $table->string('cls_opcion_37_Evaluacion_4');

            $table->string('cls_opcion_38_Evaluacion_1');
            $table->string('cls_opcion_38_Evaluacion_2');
            $table->string('cls_opcion_38_Evaluacion_3');
            $table->string('cls_opcion_38_Evaluacion_4');

            $table->string('cls_opcion_39_Evaluacion_1');
            $table->string('cls_opcion_39_Evaluacion_2');
            $table->string('cls_opcion_39_Evaluacion_3');
            $table->string('cls_opcion_39_Evaluacion_4');

            $table->string('cls_opcion_40_Evaluacion_1');
            $table->string('cls_opcion_40_Evaluacion_2');
            $table->string('cls_opcion_40_Evaluacion_3');
            $table->string('cls_opcion_40_Evaluacion_4');

            $table->string('cls_opcion_41_Evaluacion_1');
            $table->string('cls_opcion_41_Evaluacion_2');
            $table->string('cls_opcion_41_Evaluacion_3');
            $table->string('cls_opcion_41_Evaluacion_4');

            $table->string('cls_opcion_42_Evaluacion_1');
            $table->string('cls_opcion_42_Evaluacion_2');
            $table->string('cls_opcion_42_Evaluacion_3');
            $table->string('cls_opcion_42_Evaluacion_4');

            $table->string('SeleccionadosSeguridadSi');
            $table->string('SeleccionadosSeguridadNo');

            $table->string('cls_Supervisor_Firma');
            $table->string('cls_Encargado_Firma');
            $table->string('cls_Operador_Firma');
            $table->string('cls_Gestion_Firma');

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
        Schema::dropIfExists('registro_check_list_seguridads');
    }
}
