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
        $unidadeAcademicas = \App\UnidadeAcademica::all();
        return view('/CursoView/cadastrarCursos', ['ciclos' => $ciclos, 'unidade_academicas' => $unidadeAcademicas]);
    }

	public function listar(){
		$cursos = \App\Curso::all();
		return view('/CursoView/listaCursos', ['cursos' => $cursos]);

 	}
 	public function editar(Request $request){ 	
        $ciclos = \App\Ciclo::all();
        $unidadeAcademicas = \App\UnidadeAcademica::all();
 		$curso = \App\Curso::find($request->id);
 		return view('/CursoView/editarCursos', ['ciclos' => $ciclos,'unidade_academicas' => $unidadeAcademicas,'curso' => $curso, ]);
 	}	
    
    public function atualizar(Request $request) {

        try{
            CursoValidator::Validate($request->all());

            $curso = \App\Curso::find($request->id);
            $curso->fill($request->all());
            $curso->update();
            return redirect("listar/curso");
        }
        catch(ValidationException $ex){
            return redirect("editar/curso")->withErrors($ex->getValidator())->withInput();
        }
    }	
    
    public function remover(Request $request){
    	$curso = \App\Curso::find($request->id);
    	$curso->delete();
    	return redirect("/listar/curso");
    }
    
    	
}
