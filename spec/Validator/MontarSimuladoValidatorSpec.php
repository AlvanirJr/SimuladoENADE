<?php

namespace spec\App\Validator;

use App\Validator\MontarSimuladoValidator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MontarSimuladoValidatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MontarSimuladoValidator::class);
    }
}
