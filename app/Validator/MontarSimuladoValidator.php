<?php

namespace App\Validator;
use App\SimuladoAluno;
use App\Validator\ValidationException;
use Illuminate\Support\Facades\Validator;

class MontarSimuladoValidator
{

		public static function validate($qtd_existente, $qtd_exigido)
    {

    	$validator = Validator::make($rules = [], $messages = []);

    	if($qtd_existente < $qtd_exigido){
    		$validator->errors()->add('qtd_maior', 'A quantidade de Questoes exigidas esta muito grande pra o banco'); 
    	}

    	if(!$validator->errors()->isEmpty()){
    		throw new ValidationException($validator, "Erro ao validar um novo Simulado Aluno");
    	}
    }
}
