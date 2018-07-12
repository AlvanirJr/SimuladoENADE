<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursocontroller extends Controller
{
    //
    
    public function adicionar (Request $request) {
    	$cursos = new \App\Curso();
    	$cursos->nome_curso = $request->nome_curso;
    	$cursos->curso_id = $request->curso_id;
    	$cursos->save();
    	return redirect("/listar/Cursos");
    }

	 public function cadastrar() {
    	return view('cadastrarCursos');

    }

	public function listar(){
		$cursos = \App\Curso::all();
		return view('listaCursos', ['cursos' => $cursos]);

 	}
 	public function editar(Request $request){ 		
 		$curso = \App\Curso::find($request->id);
 		return view('editarCursos', ['curso' => $curso]);
 
 	}	

    
    public function atualizar(Request $request) {
    	$curso = \App\Curso::find($request->id);
    	$curso->curso_nome = $request->curso_nome;
    	$curso->curso_id = $request->curso_id;
    	$curso->update();
    	return redirect("/listar/Cursos");
    }	
    
    public function remover(Request $request){
    	$curso = \App\Curso::find($request->id);
    	$curso->delete();
    	return redirect("/listar/Cursos");
    }
    
    	
}
