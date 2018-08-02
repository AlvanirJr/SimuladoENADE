<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimuladoController extends Controller
{
    //
    public function adicionar(Request $request){
    	$simulados = new \App\Simulado();
    	$simulados->descricao_simulado = $request->descricao_simulado;
        $simulados->curso_id = $request->curso_id;
        $simulados->usuario_id = $request->usuario_id;
    	$simulados->save();
    	return redirect('/listar/simulado');
    }

    public function cadastrar(){
    	$cursos = \App\Curso::all();
        $usuarios = \App\Usuario::all();
    	return view('cadastrarSimulado', ['cursos' => $cursos, 'usuarios' => $usuarios]);
    }

    public function listar(){
    	$simulados = \App\Simulado::all();
    	return view('listaSimulado', ['simulados' => $simulados]);
    }

    public function editar(Request $request){
    	$simulado= \App\Simulado::find($request->id);

        $cursos = \App\Curso::all();
        $usuarios = \App\Usuario::all();
    	return view ('editarSimulado', ['simulado' => $simulado, 'cursos' => $cursos, 'usuarios' => $usuarios]);
    }

    public function atualizar(Request $request){
    	$simulado = \App\Simulado::find($request->id);
    	$simulado->descricao_simulado = $request->descricao_simulado;
        $simulado->curso_id = $request->curso_id;
        $simulado->usuario_id = $request->usuario_id;
    	$simulado->update();
    	return redirect('listar/simulado');
    }
    public function montar(Request $request){

            $disciplinas = \App\Disciplina::find($request->id);
        return view('montar',['disciplinas' => $disciplinas]);
    }

    public function remover(Request $request){
    	$simulado = \App\Simulado::find($request->id);
    	$simulado->delete();
    	return redirect('listar/simulado');
    }
}
