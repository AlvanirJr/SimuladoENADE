<?php

namespace spec\App\Validator;

use App\Validator\SimuladoValidator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use App\Simulado;
use PhpSpec\Laravel\LaravelObjectBehavior;

class SimuladoValidatorSpec extends LaravelObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SimuladoValidator::class);
    }

    function it_descricao_eh_obrigatorio(){
    	$simulado = new \App\Simulado();
    	$simulado->descricao_simulado = "";

    	$this->shouldThrow('App\Validator\ValidationException')->duringValidate($simulado->toArray());
    }
}
