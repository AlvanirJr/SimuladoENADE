<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Validator\CursoValidator;
use App\Validator\ValidationException;

class Cursocontroller extends Controller
{
    //
    
    public function adicionar (Request $request) {
    	try{
            CursoValidator::Validate($request->all());

            $curso = new \App\Curso();
            $curso->fill($request->all());
            $curso->save();
            return redirect("listar/curso");
        }
        catch(ValidationException $ex){
            return redirect("cadastrar/curso")->withErrors($ex->getValidator())->withInput();
        }
    }

	 public function cadastrar() {
    	$ciclos = \App\Ciclo::all();
        return view('cadastrarCursos', ['ciclos' => $ciclos]);
    }

	public function listar(){
		$cursos = \App\Curso::all();
		return view('listaCursos', ['cursos' => $cursos]);

 	}
 	public function editar(Request $request){ 	
        $ciclos = \App\Ciclo::all();	
 		$curso = \App\Curso::find($request->id);
 		return view('editarCursos', ['ciclos' => $ciclos,'curso' => $curso]);
 	}	
    
    public function atualizar(Request $request) {
    	$curso = \App\Curso::find($request->id);
    	$curso->curso_nome = $request->curso_nome;
    	$curso->ciclo_id = $request->ciclo_id;
    	$curso->update();
    	return redirect("/listar/curso");
    }	
    
    public function remover(Request $request){
    	$curso = \App\Curso::find($request->id);
    	$curso->delete();
    	return redirect("/listar/curso");
    }
    
    	
}
