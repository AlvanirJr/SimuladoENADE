<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    public function tipo_usuario(){
    	return $this->hasOne('site\SimuladoENADE\TipoUsuario');
    }
    public function curso(){
    	return $this->hasOne('site\SimuladoENADE\Curso');
    }
}
