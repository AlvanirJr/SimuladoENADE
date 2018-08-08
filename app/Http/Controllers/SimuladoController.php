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
        $cursos = \App\Curso::all();
        $usuarios = \App\Usuario::all();
    	return view ('/SimuladoView/editarSimulado', ['simulado' => $simulado, 'cursos' => $cursos, 'usuarios' => $usuarios]);

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

        return view('montar',['id_curso' => $request->id_curso]);
    }

    public function remover(Request $request){
    	$simulado = \App\Simulado::find($request->id);
    	$simulado->delete();
    	return redirect('listar/simulado');
    }
}
