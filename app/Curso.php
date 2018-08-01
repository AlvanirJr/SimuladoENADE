<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //Verificar o belongsTo se é necessario
    public function ciclo(){
    	return $this->hasOne('App\Ciclo');
    }

    protected $fillable = ['curso_nome'];
    
    public static $rules = [
    	'ciclo_id' => 'required',
    	'curso_nome' => 'required'
    ];

    public static $messages = [
    	'required' => 'O campo :attribute deve ser preenchido na forma correta',
    	'ciclo_id' => 'Este campo deve ter no minimo 1 caracteres',
    ];
}
