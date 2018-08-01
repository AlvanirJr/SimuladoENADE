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


    protected $fillable = [];

    public static $rules = [
    	'questao_id' => 'required',
    	'simulado_id' => 'required'

    ];

    public static $messages = [
    	'required' => 'O campo:attribute é obrigatório '

    ];
}
