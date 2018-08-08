<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Validator\SimuladoValidator;
use App\Validator\ValidationException;


class SimuladoController extends Controller
{
    //
    public function adicionar(Request $request){
        try{
            SimuladoValidator::Validate($request->all());

            $simulado = new \App\Simulado();
            $simulado->fill($request->all());
            $simulado->save();
            return redirect("listar/simulado");
        }
        catch(ValidationException $ex){
            return redirect("cadastrar/simulado")->withErrors($ex->getValidator())->withInput();
        }
    }

    public function cadastrar(){
    	$cursos = \App\Curso::all();
        $usuarios = \App\Usuario::all();
    	return view('/SimuladoView/cadastrarSimulado', ['cursos' => $cursos, 'usuarios' => $usuarios]);
    }

    public function listar(){
    	$simulados = \App\Simulado::all();
    	return view('/SimuladoView/listaSimulado', ['simulados' => $simulados]);
    }

    public function editar(Request $request){
    	$simulado= \App\Simulado::find($request->id);
        $cursos = \App\Curso::all();
        $usuarios = \App\Usuario::all();
    	return view ('/SimuladoView/editarSimulado', ['simulado' => $simulado, 'cursos' => $cursos, 'usuarios' => $usuarios]);
    }

    public function atualizar(Request $request){
        try{
            SimuladoValidator::Validate($request->all());

            $simulado = \App\Simulado::find($request->id);
            $simulado->fill($request->all());
            $simulado->update();
            return redirect("listar/simulado");
        }
        catch(ValidationException $ex){
            return redirect("editar/simulado")->withErrors($ex->getValidator())->withInput();
        }
    }

//Quando e se cezar terminar o controlo de acesso, nois iremos instaciar disciplinas pelo curso do usuario atual(coordenador)
    public function montar(Request $request){
        $disciplinas = \App\Disciplina::find($request->id);
        //return view('montar',['disciplinas' => $disciplinas]);
    }

    public function responder(Request $request){
        

    }



    public function remover(Request $request){
    	$simulado = \App\Simulado::find($request->id);
    	$simulado->delete();
    	return redirect('listar/simulado');
    }
}
