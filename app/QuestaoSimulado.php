<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestaoSimulado extends Model
{
    //
    public function simulado(){
    	return $this->hasOne('App\Simulado');
    }
    public function questao(){
    	return $this->hasOne('App\Questao');
    }
}
