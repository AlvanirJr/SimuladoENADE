<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    //
    public function aluno(){
    	return $this->hasOne('site\SimuladoENADE\Aluno');
    }
    public function questao(){
    	return $this->hasOne('site\SimuladoENADE\Questao');
    }
}
