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
    	'alternativa_a' => 'required|min:10',
    	'alternativa_b' => 'required|min:10',
    	'alternativa_c' => 'required|min:10',
    	'alternativa_d' => 'required|min:10',
    	'alternativa_e' => 'required|min:10',
    	'alternativa_correta' => 'required|min:10',
    	'dificuldade' => 'required',
    	'disciplina_id'=> 'required'
    ];

    public static $messages = [
    	'required' => 'O campo :attribute deve ser preenchido na forma correta',
    	'enuciado.min' => 'Este campo deve ter no minimo 10 caracteres',
    	'alternativa_a.min' => 'Este campo de ter no minimo 10 caracteres',
    	'alternativa_b.min' => 'Este campo de ter no minimo 10 caracteres',
    	'alternativa_c.min' => 'Este campo de ter no minimo 10 caracteres',
    	'alternativa_d.min' => 'Este campo de ter no minimo 10 caracteres',
    	'alternativa_e.min' => 'Este campo de ter no minimo 10 caracteres',
    	'alternativa_correta.min' => 'Este campo de ter no minimo 10 caracteres'
    ];

}
