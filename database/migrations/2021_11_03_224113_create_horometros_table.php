<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorometrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horometros', function (Blueprint $table) {
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
        Schema::dropIfExists('horometros');
    }
}
