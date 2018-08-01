<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
	protected $fillable = ['nome', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];
    //
    public function tipo_usuario(){
    	return $this->hasOne('App\TipoUsuario');
    }
    public function curso(){
    	return $this->hasOne('App\Curso');
    }

    protected $fillable = ['nome', 'cpf', 'senha', 'email'];


    public static $rules = [
    	'nome'  => 'required|min:5',
    	'cpf' => 'required|min:14',
    	'senha' => 'required|min:8',
    	'email' => 'required|min:10|email',
    	'tipo_usuario_id' => 'required',
    	'curso_id'  => 'required'
    ];

     public static $messages = [
    	'required' => 'O campo :attribute deve ser preenchido na forma correta',
    	'nome.min' => 'Este campo deve ter no minimo 5 caracteres',
    	'curso_id' => 'Este campo de ter no minimo 1 caracteres',
    	'cpf.min' => 'Este campo deve conter no minimo 9 digitos',
    	'senha.min' => 'Este campo aceita no minimo de 8 caracteres',
    	'email.min' => 'tamnho minimo do email 10',
    	'tipo_usuario_id' => 'Campo com apenas 3 opções'
    ];
}
