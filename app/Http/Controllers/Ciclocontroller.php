<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ciclocontroller extends Controller
{
    //
	public function adicionar(Request $request){
		$ciclos = new \App\Ciclo();
		$ciclos->tipo_ciclo = $request->tipo_ciclo;
		$ciclos->save();
		return redirect("listar/ciclo");
	}
	public function cadastrar(){
    	return view('cadastrarCiclo');
	}
	public function listar(){
		$ciclos = \App\Ciclo::all();
		return view('listaCiclo', ['ciclos' => $ciclos]);
	}
	public function editar(Request $request){
		$ciclos = \App\Ciclo::find($request->id);
		return view('editarCiclo',['ciclo' =>$ciclos]);
	}
	public function atualizar(Request $request){
		$ciclos = \App\Ciclo::find($request->id);
		$ciclos->tipo_ciclo = $request->tipo_ciclo;
		$ciclos->update();
		return redirect("listar\ciclo");
	}

	public function remover(Request $request){
		$ciclo = \App\Ciclo::find($request->id);
		$ciclo->delete();
		return redirect("listar\ciclo");
	}


}
