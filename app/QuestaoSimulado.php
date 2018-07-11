<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestaoSimulado extends Model
{
    //
    public function simulado(){
    	return $this->hasOne('site\SimuladoENADE\Simulado');
    }
    public function questao(){
    	return $this->hasOne('site\SimuladoENADE\Questao');
    }
}
