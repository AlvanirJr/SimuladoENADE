<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimuladoController extends Controller
{
    //
    public function adicionar(Request $request){
    	$simulados = new \App\Simulado();
    	$simulados->descricao_simulado = $request->descricao_simulado;
    	$simulados->save();
    	return redirect('/listar/simulado');
    }

    public function cadastrar(){
    	$simulados = \App\Simulado::all();
    	return view('cadastrarSimulado', ['simulados' => $simulados]);
    }

    public function listar(){
    	 $simulados = \App\Simulado::all();
    	return view('listaSimulado', ['simulados' => $simulados]);
    }

    public function editar(Request $request){
    	$simulado= \App\Simulado::find($request->id);
    	return view ('editarSimulado', ['simulado' => $simulado]);
    }

    public function atualizar(Request $request){
    	$simulado = \App\Simulado::find($request->id);
    	$simulado->descricao_simulado = $request->descricao_simulado;
    	$simulado->update();
    	return redirect('listar/simulado');
    }
    public function montar(Request $request){

        return view('montar',['id_curso' => $request->id_curso]);
    }

    public function remover(Request $request){
    	$simulado = \App\Simulado::find($request->id);
    	$simulado->delete();
    	return redirect('listar/simulado');
    }
}
