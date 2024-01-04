<?php

namespace App\Factory\Calculatrice;

use App\Factory\Calculatrice\OperationFactory;
use App\Factory\Calculatrice\Interfaces\CalculationInterface;


class AdditionFactory extends OperationFactory
{
    public function calculationType(): CalculationInterface
    {
        return new AdditionCalculation();
    }
}