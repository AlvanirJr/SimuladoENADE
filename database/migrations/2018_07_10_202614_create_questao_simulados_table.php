<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestaoSimuladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questao_simulados', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('questao_id');
            $table->increments('simulado_id');
            
            $table->date_date_set(DateTime $object, $year, $month, $day);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questao_simulados');
    }
}
