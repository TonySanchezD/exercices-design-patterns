<?php

namespace App\Factory\Calculatrice;

use App\Factory\Calculatrice\Interfaces\CalculationInterface;
use App\Factory\Calculatrice\OperationFactory;

class SoustractionFactory implements CalculationInterface
{
    public $value;

    public function calculationType( $n1, $n2)
    {
        $this->value = $n1 - $n2;
        return $this;
    }
}