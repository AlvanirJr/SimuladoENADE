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
            $table->integer('questao_id')->unsigned();
           	$table->integer('simulado_id')->unsigned();           
            
            $table->foreign('questao_id')->references('id')->on('questaos');
            $table->foreign('simulado_id')->references('id')->on('simulados');
          #  $table->timestamps('data');
            
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
