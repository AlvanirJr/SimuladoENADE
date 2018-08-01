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
}
