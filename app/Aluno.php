<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Aluno extends Model
{
    protected $fillable = ['nome', 'email', 'password', 'cpf', 'curso_id'];
    protected $hidden = ['password', 'remember_token'];
    //
    public function curso(){
    	return $this->hasOne('App\Curso');
    }


    public static $rules = [
    	'nome'  => 'required|',
    	'cpf' => 'required|min:14',
    	'password' => 'required|min:8',
    	'email' => 'required|email',
    	'curso_id'  => 'required'
    ];

     public static $messages = [
    	'required' => 'O campo :attribute deve ser preenchido na forma correta',
        'cpf.min' => 'O :attribute deve conter no minimo 9 digitos',
        'password.min' => 'A senha deve ter no minimo 8 caracteres',
        'email.email' => "O email deve ser um email valido"
    ];
}
