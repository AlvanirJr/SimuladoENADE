<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurmaController extends Controller
{
    //
     public function adicionar(Request $request){
    	$turma = new \App\Turma();
    	$turma->aluno_id = $request->aluno_id;
    	$turma->ciclo_id = $request->ciclo_id;
    	$turma->save();
    	return redirect('/listar/turma');
    }

    public function cadastrar(){
    	$alunos = \App\Aluno::all();
    	$ciclos = \App\Ciclo::all();
    	return view('/TurmaView/cadastrarTurma', ['alunos' => $alunos, 'ciclos' => $ciclos]);
    }

    public function listar(){
    	$turmas = \App\Turma::all();
    	return view ('/TurmaView/listaTurmas',['turmas' => $turmas]);
    }

    public function editar(Request $request){
    	$turma = \App\Turma::find($request->id);
    	$alunos = \App\Aluno::all();
    	$ciclos = \App\Ciclo::all();

    	return view('/TurmaView/editarTurmas',['turma'=> $turma, 'alunos'=> $alunos, 'ciclos' => $ciclos ]);

    }

    public function atualizar(Request $request){
    	$turma = \App\Turma::find($request->id);
		#$turma->aluno_id = $request->aluno_id;
		$turma->ciclo_id = $request->ciclo_id;
		$turma->update();
		return redirect("/listar/turma");
    }

    public function remover(Request $request){
 	$turma = \App\Turma::find($request->id);
 	$turma->delete();
 	return redirect("/listar/turma");
 		
 	}
}
