<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DisciplinaController extends Controller
{
    public function adicionar (Request $request) {
    	$disciplinas = new \App\Disciplina();
    	$disciplinas->nome = $request->nome;
    	$disciplinas->curso_id = $request->curso_id;
    	$disciplinas->save();
    	return redirect("/listar/Disciplinas");
    }
    
    public function cadastrar() {
    	$cursos = \App\Curso::all();
    	return view('cadastrarDisciplinas', ['cursos' => $cursos]);
    }
    	
    
 	public function listar(){
		$disciplinas = \App\Disciplina::all();
		return view('listaDisciplinas', ['disciplinas' => $disciplinas]);

 	}   
 	
 	public function editar(Request $request){ 		
 		$disciplina = \App\Disciplina::find($request->id);
 		$cursos = \App\Curso::all();
 		return view('editarDisciplinas', ['disciplina' => $disciplina], ['cursos' => $cursos]);
 	
 	}

	public function atualizar(Request $request){
		
		$disciplina = \App\Disciplina::find($request->id);
		$disciplina->nome = $request->nome;
		$disciplina->curso_id = $request->curso_id;
		$disciplina->update();
		return redirect("/listar/Disciplinas");
	} 	
 	
 	public function remover(Request $request){
 		$disciplina = \App\Disciplina::find($request->id);
 		$disciplina->delete();
 		return redirect("/listar/Disciplinas");
 		
 	}
}
