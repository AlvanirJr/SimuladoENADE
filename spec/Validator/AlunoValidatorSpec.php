<?php

namespace spec\App\Validator;

use App\Validator\AlunoValidator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use App\Aluno;
use PhpSpec\Laravel\LaravelObjectBehavior;

class AlunoValidatorSpec extends LaravelObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(AlunoValidator::class);
    }
        function it_o_nome_do_aluno_eh_obrigatorio(){
    	$aluno = new \App\Aluno();
    	$aluno->nome = "";
    	$aluno->cpf = "123.456.789-50";
    	$aluno->senha = "cachorro";
    	$aluno->email = "pedro_cachorrolouco@gmail.com";
    	$aluno->curso_id = 1;

    	$this->shouldThrow('App\Validator\ValidationException')->duringValidate($aluno->toArray());
    	} 

     function it_o_cpf_do_aluno_eh_obrigatorio(){
    	$aluno = new \App\aluno();
    	$aluno->nome = "Pedro";
    	$aluno->cpf = "";
    	$aluno->senha = "cachorro";
    	$aluno->email = "pedro_cachorrolouco@gmail.com";
    	$aluno->curso_id = 1;

    	$this->shouldThrow('App\Validator\ValidationException')->duringValidate($aluno->toArray());
    	} 

    	function it_a_senha_do_aluno_eh_obrigatorio(){
    	$aluno = new \App\aluno();
    	$aluno->nome = "Pedro";
    	$aluno->cpf = "123.456.789-50";
    	$aluno->senha = "";
    	$aluno->email = "pedro_cachorrolouco@gmail.com";
    	$aluno->curso_id = 1;

    	$this->shouldThrow('App\Validator\ValidationException')->duringValidate($aluno->toArray());
    	} 


    	function it_o_email_do_aluno_eh_obrigatorio(){
    	$aluno = new \App\aluno();
    	$aluno->nome = "Pedro";
    	$aluno->cpf = "123.456.789-50";
    	$aluno->senha = "cachorro";
    	$aluno->email = "";
    	$aluno->curso_id = 1;

    	$this->shouldThrow('App\Validator\ValidationException')->duringValidate($aluno->toArray());
    	}



    	function it_o_curso_id_do_aluno_eh_obrigatorio(){
    	$aluno = new \App\aluno();
    	$aluno->nome = "Pedro";
    	$aluno->cpf = "123.456.789-50";
    	$aluno->senha = "cachorro";
    	$aluno->email = "pedro_cachorrolouco@gmail.com";
    	$aluno->curso_id = null;

    	$this->shouldThrow('App\Validator\ValidationException')->duringValidate($aluno->toArray());
    	}

}
