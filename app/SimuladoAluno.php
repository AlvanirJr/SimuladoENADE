<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SimuladoAluno extends Model
{
    //
    public function simulado(){
    	return $this->hasOne('App\Simulado');
    }
    public function aluno(){
    	return $this->hasOne('App\Aluno');
    }

      protected $fillable = ['aluno_id','simulado_id'];

     public static $rules = [
     	'aluno_id' => 'required',
     	'simulado_id' => 'required'
     ];

     public static $messages = [
     	'required' => 'O campo:attribute é obrigatório'

     ];
}
