<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Validator\AlunoValidator;
use Illuminate\Support\Facades\Hash;
use App\Validator\ValidationException;

class AlunoController extends Controller
{
	public function adicionar(Request $request){
		try{
        	AlunoValidator::Validate($request->all());

        	$aluno = new \App\Aluno();
        	$aluno->fill($request->all());
        	$aluno->password = Hash::make($request->password);
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
		return view('/AlunoView/cadastrarAluno',['cursos' => $cursos], ['alunos' => $alunos]);
	}

	public function listar (){
		$alunos = \App\Aluno::all();
		return view('/AlunoView/listaAluno',['alunos'=> $alunos]);

	}
	public function editar(Request $request){
		$aluno = \App\Aluno::find($request->id);
		$curso = \App\Curso::all();
		return view('/AlunoView/editarAluno', ['aluno' => $aluno], ['cursos' => $curso]);

	}

	public function atualizar(Request $request){
		try{
        	AlunoValidator::Validate($request->all());
        	$aluno = \App\Aluno::find($request->id);    
        	$aluno->fill($request->all());
        	$aluno->update();
        	return redirect("listar/aluno");
    	}
    	catch(ValidationException $ex){
        	return redirect("editar/aluno/".$request->id)->withErrors($ex->getValidator())->withInput();
    	}
	}

	    public function remover(Request $request){
        $aluno = \App\Aluno::find($request->id);
        $aluno->delete();
        return redirect('\listar\aluno');
    }
}
