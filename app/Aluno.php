<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    public function curso(){
    	return $this->hasOne('site\SimuladoENADE\Curso');
    }
}
