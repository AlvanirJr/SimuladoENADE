<?php

namespace App\Validator;
use App\QuestaoSimulado;
class QuestaoSimuladoValidator
{

		public function validate($dados)
    {

    	$validator = \Validator::make($dados,
    								 QuestaoSimulado::$rules,
    								 QuestaoSimulado::$messages);
    	if(!$validator->errors()->isEmpty()){
    		throw new ValidationException($validator, "Erro ao validar uma questao de um simulado");
    	}
    }
}
