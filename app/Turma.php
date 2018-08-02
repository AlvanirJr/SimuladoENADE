<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    //
    public function aluno(){
    	return $this->hasOne('App\Aluno');
    }
    public function ciclo(){
    	return $this->hasOne('App\Ciclo');
    }

     protected $fillable = ['aluno_id','ciclo_id'];

     public static $rules = [
     	'aluno_id' => 'required',
     	'ciclo_id' => 'required'
     ];

     public static $messages = [
     	'required' => 'O campo:attribute é obrigatório'

     ];


}
