<?php

namespace App\Validator;
use App\Ciclo;

class CicloValidator
{

	public function validate($dados)
    {

    	$validator = \Validator::make($dados,
    								 Ciclo::$rules,
    								 Ciclo::$messages);
    	if(!$validator->errors()->isEmpty()){
    		throw new ValidationException($validator, "Erro ao validar um Ciclo");
    	}
    }
}
