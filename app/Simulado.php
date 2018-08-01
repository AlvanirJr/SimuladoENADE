<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simulado extends Model
{
    //


    protected $fillable = ['descricao_simulado'];

    public static $rules = [
    	'descricao_simulado' => 'required|min:5'
    ];

    public static $messages = [
    	'required' => 'O campo :attribute deve ser preenchido na forma correta',
    	'descricao_simulado.min' => 'O campo deve ser no minimo 5 letras'

    ];
}
