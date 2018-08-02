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
    	$ciclos = \App\Ciclo::all();
        return view('/CursoView/cadastrarCursos', ['ciclos' => $ciclos]);
    }

	public function listar(){
		$cursos = \App\Curso::all();
		return view('/CursoView/listaCursos', ['cursos' => $cursos]);

 	}
 	public function editar(Request $request){ 	
        $ciclos = \App\Ciclo::all();	
 		$curso = \App\Curso::find($request->id);
 		return view('/CursoView/editarCursos', ['ciclos' => $ciclos,'curso' => $curso]);
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
