<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
	public function adicionar(Request $request){
		$alunos = new \App\Aluno();
    	$alunos->nome = $request->nome;
    	$alunos->cpf = $request->cpf;
    	$alunos->email = $request->email;
    	$alunos->senha = $request->senha;
    	$alunos->curso_id = $request->curso_id;
    	$alunos->save();
    	return redirect("/listar/aluno");


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
		$aluno->senha = $request->senha;
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
