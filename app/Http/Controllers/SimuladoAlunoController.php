<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimuladoAlunoController extends Controller
{
    //

    public function adicionar(Request $request){
    	$simuladoAluno = new \App\SimuladoAluno();
    	$simuladoAluno->aluno_id = $request->aluno_id;
    	$simuladoAluno->simulado_id = $request->simulado_id;
    	$simuladoAluno->save();
    	return redirect('/listar/simuladoaluno');
    }

    public function cadastrar(){
    	$alunos = \App\Aluno::all();
    	$simulados = \App\Simulado::all();
    	return view('cadastrarSimuladoAluno', ['alunos' => $alunos, 'simulados' => $simulados]);
    }
    
    public function listar(){
    	$simuladoAlunos = \App\SimuladoAluno::all();
    	return view('listaSimuladoAluno', ['simuladoAlunos' => $simuladoAlunos]);
    }

    public function editar(Request $request){
    	$simuladoAluno = \App\SimuladoAluno::find($request->id);
    	$alunos = \App\Aluno::all();
    	$simulados = \App\Simulado::all();

    	return view('editarSimuladoAluno',['simuladoAluno'=> $simuladoAluno, 'alunos'=> $alunos, 'simulados' => $simulados ]);

    }

    public function atualizar(Request $request){
    	$simuladoAluno = \App\SimuladoAluno::find($request->id);
		$simuladoAluno->aluno_id = $request->aluno_id;
		$simuladoAluno->simulado_id = $request->simulado_id;
		$simuladoAluno->update();
		return redirect("/listar/simuladoaluno");
    }


    public function remover(Request $request){
 	$simuladoAluno = \App\SimuladoAluno::find($request->id);
 	$simuladoAluno->delete();
 	return redirect("/listar/simuladoaluno");
 		
 	}


}
