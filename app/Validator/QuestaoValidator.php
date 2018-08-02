<?php

namespace App\Validator;
use App\Questao;

class QuestaoValidator
{

	public static function validate($dados)
    {

    	$validator = \Validator::make($dados,
    								 Questao::$rules,
    								 Questao::$messages);
    	if(!$validator->errors()->isEmpty()){
    		throw new ValidationException($validator, "Erro ao validar uma nova Questao");
    	}
    }
}
