<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simulado extends Model
{
    //
	public function usuario(){
    	return $this->hasOne('App\Usuario');
    }
    public function curso(){
    	return $this->hasOne('App\Curso');
    }

    protected $fillable = ['descricao_simulado'];

    public static $rules = [
    	'descricao_simulado' => 'required|min:5',
        'usuario_id' => 'required',
        'simulado_id' => 'required'
    ];

    public static $messages = [
    	'required' => 'O campo :attribute deve ser preenchido na forma correta',
    	'descricao_simulado.min' => 'O campo deve ser no minimo 5 letras'

    ];
}
