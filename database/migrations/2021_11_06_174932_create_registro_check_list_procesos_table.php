<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroCheckListProcesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_check_list_procesos', function (Blueprint $table) {
            $table->id();

            $table->string('clp_Eco');
            $table->string('clp_Fecha');
            $table->string('clp_Horo');
            $table->string('clp_Turno');

            $table->string('clp_1');
            $table->string('clp_2');
            $table->string('clp_3');
            $table->string('clp_4');
            $table->string('clp_5');
            $table->string('clp_6');
            $table->string('clp_7');
            $table->string('clp_8');
            $table->string('clp_9');
            $table->string('clp_10');
            $table->string('clp_11');
            $table->string('clp_12');
            $table->string('clp_13');
            $table->string('clp_14');
            $table->string('clp_15');
            $table->string('clp_16');
            $table->string('clp_17');
            $table->string('clp_18');
            $table->string('clp_19');
            $table->string('clp_20');

            $table->string('SeleccionadosProcesoSi');
            $table->string('SeleccionadosProcesoNo');

            $table->string('clp_Observaciones');
            $table->string('clp_Supervisor');
            $table->string('clp_Encargado');
            $table->string('clp_Operador');
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
        Schema::dropIfExists('registro_check_list_procesos');
    }
}
