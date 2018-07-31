<?php

namespace App\Validator;
use App\Disciplina;

class DisciplinaValidator
{
    public function validate($dados)
    {

    	$validator = \Validator::make($dados,
    								 Disciplina::$rules,
    								 Disciplina::$messages);
    	if(!$validator->errors()->isEmpty()){
    		throw new ValidationException($validator, "Erro ao validar uma Disciplina");
    	}
    }
}
