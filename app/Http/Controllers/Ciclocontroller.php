<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Validator\CicloValidator;
use App\Validator\ValidationException;


class Ciclocontroller extends Controller
{
    //
	public function adicionar(Request $request){
    	try{
        	CicloValidator::Validate($request->all());

        	$ciclo = new \App\Ciclo();
        	$ciclo->fill($request->all());
        	$ciclo->save();
        	return redirect("listar/ciclo");
    	}
    	catch(ValidationException $ex){
        	return redirect("cadastrar/ciclo")->withErrors($ex->getValidator())->withInput();
    	}
    }

	public function cadastrar(){
    	return view('/CicloView/cadastrarCiclo');
	}
	public function listar(){
		$ciclos = \App\Ciclo::all();
		return view('/CicloView/listaCiclo', ['ciclos' => $ciclos]);
	}
	public function editar(Request $request){
		$ciclos = \App\Ciclo::find($request->id);
		return view('/CicloView/editarCiclo',['ciclo' =>$ciclos]);
	}
	public function atualizar(Request $request){
		try{
        	CicloValidator::Validate($request->all());

			$ciclo = \App\Ciclo::find($request->id);
        	$ciclo->fill($request->all());
        	$ciclo->update();
        	return redirect("listar/ciclo");
    	}
    	catch(ValidationException $ex){
        	return redirect("editar/ciclo")->withErrors($ex->getValidator())->withInput();
    	}
	}

	public function remover(Request $request){
		$ciclo = \App\Ciclo::find($request->id);
		$ciclo->delete();
		return redirect("listar\ciclo");
	}


}
