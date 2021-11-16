<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorometroDosMilHorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horometro_dos_mil_horas', function (Blueprint $table) {
            $table->id();
            $table->string('fechaHorometro');
            $table->string('turnoHorometro');
            $table->string('inicialHorometro');
            $table->string('finalHorometro');
            $table->string('totalHorometro');
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
        Schema::dropIfExists('horometro_dos_mil_horas');
    }
}
