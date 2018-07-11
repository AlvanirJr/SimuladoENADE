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
            $table->foreign('questao_id')->reference('id')->on('questaos');
            $table->foreign('simulado_id')->reference('id')->on('simulados');
            $table->timestamp();
            
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
