<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model

{
    //
    public function disciplina(){
    	return $this->hasOne('App\Disciplina');
    }

    protected $fillable = ['enuciado', 
						   'alternativa_a', 
						   'alternativa_b',
						   'alternativa_c', 
						   'alternativa_d',
						   'alternativa_e', 
						   'alternativa_correta', 
						   'dificuldade'];

    public static $rules = [
    	'enuciado' => 'required|min:10',
    	'alternativa_a' => 'required',
    	'alternativa_b' => 'required',
    	'alternativa_c' => 'required',
    	'alternativa_d' => 'required',
    	'alternativa_e' => 'required',
    	'alternativa_correta' => 'required|max:1',
    	'dificuldade' => 'required',
    	'disciplina_id'=> 'required'
    ];

    public static $messages = [
    	'required' => 'O campo :attribute deve ser preenchido na forma correta',
    	'enuciado.min' => 'Este campo deve ter no minimo 10 caracteres',
    	'alternativa_correta.max' => 'Este campo de ter no minimo 10 caracteres'
    ];

}
