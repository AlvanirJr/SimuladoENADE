<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Aluno extends Model
{
    protected $fillable = ['nome', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];
    //
    public function curso(){
    	return $this->hasOne('App\Curso');
    }
     protected $fillable = ['nome', 'cpf', 'senha', 'email'];


    public static $rules = [
    	'nome'  => 'required|',
    	'cpf' => 'required|min:14',
    	'senha' => 'required|min:8',
    	'email' => 'required|email',
    	'curso_id'  => 'required'
    ];

     public static $messages = [
    	'required' => 'O campo :attribute deve ser preenchido na forma correta',
    	'curso_id' => 'Este campo de ter no minimo 1 caracteres',
    	'cpf.min' => 'Este campo deve conter no minimo 14 digitos',
    	'senha.min' => 'Este campo aceita no minimo de 8 caracteres',
    	'email.min' => 'tamnho minimo do email 10'
    ];
}
