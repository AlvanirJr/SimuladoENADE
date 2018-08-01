<?php

namespace App\Validator;
use App\Turma;
class TurmaValidator
{

	public function validate($dados)
    {

    	$validator = \Validator::make($dados,
    								 Turma::$rules,
    								 Turma::$messages);
    	if(!$validator->errors()->isEmpty()){
    		throw new ValidationException($validator, "Erro ao validar uma Turma");
    	}
    }
}
