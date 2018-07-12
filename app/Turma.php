<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    //
    public function aluno(){
    	return $this->hasOne('App\Aluno');
    }
    public function ciclo(){
    	return $this->hasOne('App\Ciclo');
    }
}
