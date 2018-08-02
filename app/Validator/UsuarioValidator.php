<?php

namespace App\Validator;
use App\Usuario;
class UsuarioValidator
{
	public static function validate($dados)
    {

    	$validator = \Validator::make($dados,
    								 Usuario::$rules,
    								 Usuario::$messages);
    	if(!$validator->errors()->isEmpty()){
    		throw new ValidationException($validator, "Erro ao validar um aluno");
    	}
    }
}
