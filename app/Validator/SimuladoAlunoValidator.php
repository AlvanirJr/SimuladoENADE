<?php

namespace App\Validator;
use App\SimuladoAluno;
class SimuladoAlunoValidator
{

		public static function validate($dados)
    {

    	$validator = \Validator::make($dados,
    								 SimuladoAluno::$rules,
    								 SimuladoAluno::$messages);
    	if(!$validator->errors()->isEmpty()){
    		throw new ValidationException($validator, "Erro ao validar um novo Simulado Aluno");
    	}
    }
}
