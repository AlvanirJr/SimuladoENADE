<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespostaController extends Controller
{
    //
     public function adicionar(Request $request){
    	$resposta = new \App\Resposta();
    	$resposta->questao_id = $request->questao_id;
    	$resposta->aluno_id = $request->aluno_id;
    	$resposta->alternativa_questao =$request->alternativa_questao;
    	$resposta->save();
    	return redirect('/listar/resposta');
    }

    public function cadastrar(){
    	$alunos = \App\Aluno::all();
    	$questaos = \App\Questao::all();
    	return view('cadastrarResposta', ['alunos' => $alunos, 'questaos' => $questaos]);
    }

    public function listar(){
    	$respostas = \App\Resposta::all();
    	return view ('listaResposta',['respostas' => $respostas]);
    }

    

    public function editar(Request $request){
    	$resposta = \App\Resposta::find($request->id);
    	$alunos = \App\Aluno::all();
    	$questaos = \App\Questao::all();

    	return view('editarResposta',['resposta'=> $resposta, 'alunos'=> $alunos, 'questaos' => $questaos ]);

    }

    public function atualizar(Request $request){
    	$resposta = \App\Resposta::find($request->id);
		$resposta->aluno_id = $request->aluno_id;
		$resposta->questao_id = $request->questao_id;
		$resposta->alternativa_questao = $request->alternativa_questao;
		$resposta->update();
		return redirect("/listar/resposta");
    }

    public function remover(Request $request){
 	$resposta = \App\Resposta::find($request->id);
 	$resposta->delete();
 	return redirect("/listar/resposta");
 		
 	}
}
