<?php

namespace App\Validator;
use App\Aluno;
class AlunoValidator
{

	public function validate($dados)
    {

    	$validator = \Validator::make($dados,
    								 Aluno::$rules,
    								 Aluno::$messages);
    	if(!$validator->errors()->isEmpty()){
    		throw new ValidationException($validator, "Erro ao validar um Aluno");
    	}
    }
}
