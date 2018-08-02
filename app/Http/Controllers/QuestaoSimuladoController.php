<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestaoSimuladoController extends Controller
{
    //

    public function adicionar(Request $request){
    	$questaoSimulado = new \App\QuestaoSimulado();
    	$questaoSimulado->questao_id = $request->questao_id;
    	$questaoSimulado->simulado_id  =$request->simulado_id;
    	$questaoSimulado->save();
    	return redirect('listar/QuestaoSimulados');
    }


    public function cadastrar(){
    	$questaos = \App\Questao::all();
    	$simulados = \App\Simulado::all();
    	return view('/QuestaoSimuladoView/cadastrarQuestaoSimulado', ['questaos' => $questaos, 'simulados' => $simulados]);
    }

     public function listar(){
    	$questaoSimulados = \App\QuestaoSimulado::all();
    	return view('/QuestaoSimuladoView/listaQuestaoSimulado', ['questaoSimulados' => $questaoSimulados]);
    }

    public function editar(Request $request){
    	$questaoSimulado = \App\QuestaoSimulado::find($request->id);
    	$alunos = \App\Aluno::all();
    	$questaos = \App\Questao::all();

    	return view('/QuestaoSimuladoView/editarQuestaoSimulado',['questaoSimulado'=> $simuladoAluno, 'questaos'=> $questaos, 'simulados' => $simulados ]);

    }

      public function atualizar(Request $request){
    	$questaoSimulado = \App\QuestaoSimulado::find($request->id);
		$questaoSimulado->aluno_id = $request->aluno_id;
		$simuladoAluno->questao_id = $request->questao_id;
		$simuladoAluno->update();
		return redirect("/listar/QuestaoSimulados");
    }

    public function remover(Request $request){
 	$questaoSimulado = \App\QuestaoSimulado::find($request->id);
 	$questaoSimulado->delete();
 	return redirect("/listar/QuestaoSimulados");
 		
 	}
}
