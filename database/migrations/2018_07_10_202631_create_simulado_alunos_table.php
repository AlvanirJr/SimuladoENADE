<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimuladoAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simulado_alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('aluno_id')->reference('id')->on('alunos');
            $table->foreign('simulado_id')->reference('id')->on('simulados');
            
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
        Schema::dropIfExists('simulado_alunos');
    }
}
