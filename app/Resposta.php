<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    //
    public function aluno(){
    	return $this->hasOne('App\Aluno');
    }
    public function questao(){
    	return $this->hasOne('App\Questao');
    }

    protected $fillable = ['alternativa_questao'];


    public static $rules = [
    	'questao_id' => 'required',
    	'aluno_id' => 'required',
    	'alternativa_questao' => 'required|max:1'

    ];


    public static $messages = [
    	'required' => 'O campo: attribute é obrigatiorio',
    	'alternativa_questao.max' => 'o campo aceita apenas uma alternativa'

    ];
}
