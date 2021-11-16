<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroCheckListOperativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_check_list_operativas', function (Blueprint $table) {
            $table->id();
            
            $table->string('clo_Eco');
            $table->string('clo_Fecha');
            $table->string('clo_Horo');
            $table->string('clo_Turno');

            $table->string('clo_Verificar_foza');
            $table->string('clo_Verificar_botones_stop');
            $table->string('clo_Micros_puerta_entrada');
            $table->string('clo_Micros_puerta_salida');
            $table->string('clo_Micros_desembarque');
            $table->string('clo_Verificar_telefonica');
            $table->string('clo_Comprobar_aire');
            $table->string('clo_Comprobar_intercierres');
            $table->string('clo_Verificar_palanca');
            $table->string('clo_Verificar_puertas');

            $table->string('clo_Verificar_guias');
            $table->string('clo_Verificar_interruptores');
            $table->string('clo_Verificar_orden');
            $table->string('clo_Verificar_grado');
            $table->string('clo_Elevador');
            $table->string('clo_Recorrido');

            $table->string('SeleccionadosOperativaSi');
            $table->string('SeleccionadosOperativaNo');

            $table->string('clo_Observaciones');

            $table->string('clo_Elaboro');
            $table->string('clo_Verifico');
            $table->string('clo_Entrego');
            $table->string('clo_Recibe');

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
        Schema::dropIfExists('registro_check_list_operativas');
    }
}
