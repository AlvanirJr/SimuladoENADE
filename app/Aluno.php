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
}
