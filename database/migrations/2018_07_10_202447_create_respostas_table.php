<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('questao_id')->unsigned();
            $table->integer('aluno_id')->unsigned();
            $table->string('alternativa_questao');
            $table->foreign('questao_id')->references('id')->on('questaos');
            $table->foreign('aluno_id')->references('id')->on('alunos')            ;
            #$table->timestamps('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respostas');
    }
}
