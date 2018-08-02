<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Validator\AlunoValidator;
use App\Validator\ValidationException;

class AlunoController extends Controller
{
	public function adicionar(Request $request){
		try{
        	AlunoValidator::Validate($request->all());

        	$aluno = new \App\Aluno();
        	$aluno->fill($request->all());
        	$aluno->save();
        	return redirect("listar/aluno");
    	}
    	catch(ValidationException $ex){
        	return redirect("cadastrar/aluno")->withErrors($ex->getValidator())->withInput();
    	}

	}

	public function cadastrar(){
		$cursos = \App\Curso::all();
		$alunos = \App\Aluno::all();
		return view('cadastrarAluno',['cursos' => $cursos], ['alunos' => $alunos]);
	}

	public function listar (){
		$alunos = \App\Aluno::all();
		return view('listaAluno',['alunos'=> $alunos]);

	}
	public function editar(Request $request){
		$aluno = \App\Aluno::find($request->id);
		$curso = \App\Curso::all();
		return view('editarAluno', ['aluno' => $aluno], ['cursos' => $curso]);

	}

	public function atualizar(Request $request){
		$aluno = \App\Aluno::find($request->id);
		$aluno->nome = $request->nome;
		$aluno->email = $request->email;
		$aluno->password = $request->password;
		$aluno->curso_id = $request->curso_id;
		$aluno->update();
		return redirect('\listar\aluno');
	}

	    public function remover(Request $request){
        $aluno = \App\Aluno::find($request->id);
        $aluno->delete();
        return redirect('\listar\aluno');
    }
}
