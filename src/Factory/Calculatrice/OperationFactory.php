<?php

namespace App\Factory\Calculatrice;

use App\Factory\Calculatrice\AdditionFactory;
use App\Factory\Calculatrice\SoustractionFactory;

class OperationFactory 
{
    public function choiceFactory(string $operation)
    {
        $class = "App\Factory\Calculatrice\\" . $operation . "Factory"::class;

        return new $class;
    }
}