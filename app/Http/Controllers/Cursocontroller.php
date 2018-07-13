<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursocontroller extends Controller
{
    //
    
    public function adicionar (Request $request) {
    	$cursos = new \App\Curso();
		$cursos->ciclo_id = $request->ciclo_id;
		$cursos->curso_nome = $request->curso_nome;    		
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
    	$curso->ciclo_id = $request->ciclo_id;
    	$curso->update();
    	return redirect("/listar/Cursos");
    }	
    
    public function remover(Request $request){
    	$curso = \App\Curso::find($request->id);
    	$curso->delete();
    	return redirect("/listar/Cursos");
    }
    
    	
}