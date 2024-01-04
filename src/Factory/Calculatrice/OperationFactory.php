<?php

namespace App\Factory\Calculatrice;

use App\Factory\Calculatrice\AdditionFactory;
use App\Factory\Calculatrice\SoustractionFactory;
use App\Factory\Calculatrice\Interfaces\CalculationInterface;


abstract class OperationFactory 
{
    abstract public function calculationType(): CalculationInterface;

    final public function calcul($n1, $n2)
    {
        return $this->calculationType()->calculation($n1, $n2);
    }
}