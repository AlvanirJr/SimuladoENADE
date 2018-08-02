<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Validator\DisciplinaValidator;
use App\Validator\ValidationException;

class DisciplinaController extends Controller
{   

    public function adicionar(Request $request){
        
        try{
            DisciplinaValidator::Validate($request->all());
            $disciplina = new \App\Disciplina();
            $disciplina->fill($request->all());
            $disciplina->save();
            return redirect("listar/disciplina");
        }
        catch(ValidationException $ex){
            return redirect("cadastrar/disciplina")->withErrors($ex->getValidator())->withInput();

        }

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
		return redirect("/listar/disciplina");
	} 	
 	
 	public function remover(Request $request){
 		$disciplina = \App\Disciplina::find($request->id);
 		$disciplina->delete();
 		return redirect("/listar/disciplina");
 		
 	}

    public function filtro_curso(Request $request){
        $disciplinas = \App\Disciplina::where('curso_id', '=', $request->curso_id)->get();

        return json_encode($disciplinas);
    }
}
