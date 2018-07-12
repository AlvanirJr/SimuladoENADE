<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SimuladoAluno extends Model
{
    //
    public function simulado(){
    	return $this->hasOne('App\Simulado');
    }
    public function aluno(){
    	return $this->hasOne('App\Aluno');
    }

}
