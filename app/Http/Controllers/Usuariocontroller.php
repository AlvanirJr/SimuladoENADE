<?php

namespace App\Http\Controllers;

use Illuminate\Notifications\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \App\Notifications\usuarioNotificacao;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use \App\Mail\emailConfirmacao;
use App\Validator\UsuarioValidator;
use App\Validator\ValidationException;


class Usuariocontroller extends Controller
{
    public function adicionar(Request $request){
    	try{
            UsuarioValidator::Validate($request->all());

            $usuario = new \App\Usuario();
            $usuario->fill($request->all());
            $usuario->password = Hash::make($request->password);

            if($usuario->save()){
                $usuario = $request->email;
                Mail::to($usuario)->send(new emailConfirmacao()); 
        
            }
            return redirect("listar/usuario");
        }
        catch(ValidationException $ex){
            return redirect("cadastrar/usuario")->withErrors($ex->getValidator())->withInput();
        }
    }

    public function cadastrar(){
//        $this->authorize('adcionar', \App\Usuario::class);        
        $cursos = \App\Curso::all();
        $tipos_usuario = \App\TipoUsuario::all();
		return view('/UsuarioView/cadastrarUsuario',['cursos' => $cursos, 'tipos_usuario' => $tipos_usuario]);   
    }
    
    public function listar () {
		$usuarios = \App\Usuario::all();
		return view('/UsuarioView/ListaUsuario',['usuarios' => $usuarios]);   
    }
    
    public function editar(Request $request) {
        $cursos = \App\Curso::all();
        $tipos_usuario = \App\TipoUsuario::all();
		$usuario = \App\Usuario::find($request->id);
		return view('/UsuarioView/editarUsuario', ['usuario'=> $usuario, 'cursos' => $cursos, 'tipos_usuario' => $tipos_usuario]);    
    }
    
    public function atualizar(Request $request){
        try{
            UsuarioValidator::Validate($request->all());

            $usuario = \App\Usuario::find($request->id);    
            $usuario->fill($request->all());
            $usuario->update();
            return redirect("listar/usuario");
        }
        catch(ValidationException $ex){
            return redirect("editar/usuario/".$usuario->id)->withErrors($ex->getValidator())->withInput();
        }
    }
    
    public function remover (Request $request) {
    	$usuario = \App\Usuario::find($request->id);
    	$usuario->delete();
    	return redirect("/listar/usuario");
    }

}




