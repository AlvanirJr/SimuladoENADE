<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->increments('id');
            ##DATA_CICLO
            $table->integer('aluno_id')->unsigned();
            $table->integer('ciclo_id')->unsigned();            
            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->foreign('ciclo_id')->references('id')->on('ciclos');
           # $table->timestamps('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turmas');
    }
}
