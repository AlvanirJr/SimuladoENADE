<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Administradorcontroller extends Controller
{
    public function adcionar(Request $request){
    	$usuarios = new \App\Usuario();
    	$usuarios->nome = $request->nome;
    	$usuarios->cpf = $request->cpf;
    	$usuarios->senha = $request->senha;
    	$usuarios->email = $request->email;
        $usuarios->tipo_usuario_id = $request->tipo_usuario_id;
        $usuarios->curso_id = $request->curso_id;
    	$usuarios->save();
    	return redirect("/listar/usuario");
    }

    public function cadastrar(){
        $cursos = \App\Curso::all();
        $tipos_usuario = \App\TipoUsuario::all();
		return view('cadastrarUsuario',['cursos' => $cursos, 'tipos_usuario' => $tipos_usuario]);   
    }
    
    public function listar () {
		$usuarios = \App\Usuario::all();
		return view('ListaUsuario',['usuarios' => $usuarios]);   
    }
    
    public function editar(Request $request) {
        $cursos = \App\Curso::all();
        $tipos_usuario = \App\TipoUsuario::all();
		$usuario = \App\Usuario::find($request->id);
		return view('editarUsuario', ['usuario'=> $usuario, 'cursos' => $cursos, 'tipos_usuario' => $tipos_usuario]);    
    }
    
    public function atualizar(Request $request){
		$usuario = \App\Usuario::find($request->id);    
    	$usuario->email = $request->email;
        $usuario->nome = $request->nome;
        $usuario->curso_id= $request->curso_id;
        $usuario->tipo_usuario_id = $request->tipo_usuario_id;
    	$usuario->senha = $request->senha;
    	$usuario->update();
    	return redirect("/listar/usuario");
    	
    }
    
    public function remover (Request $request) {
    	$usuario = \App\Usuario::find($request->id);
    	$usuario->delete();
    	return redirect("/listar/usuario");
    }

}




