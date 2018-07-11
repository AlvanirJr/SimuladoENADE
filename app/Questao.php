<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    //
    public function disciplina(){
    	return $this->hasOne('site\SimuladoENADE\Disciplina');
    }
}
