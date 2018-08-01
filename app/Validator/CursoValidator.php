<?php

namespace App\Validator;
use App\Curso;
class CursoValidator
{
	public function validate($dados)
    {

    	$validator = \Validator::make($dados,
    								 Curso::$rules,
    								 Curso::$messages);
    	if(!$validator->errors()->isEmpty()){
    		throw new ValidationException($validator, "Erro ao validar um Curso");
    	}
    }
}
