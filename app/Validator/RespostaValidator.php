<?php

namespace App\Validator;
use App\Resposta;
class RespostaValidator
{

		public static function validate($dados)
    {

    	$validator = \Validator::make($dados,
    								 Resposta::$rules,
    								 Resposta::$messages);
    	if(!$validator->errors()->isEmpty()){
    		throw new ValidationException($validator, "Erro ao validar um novo Resposta");
    	}
    }
}
