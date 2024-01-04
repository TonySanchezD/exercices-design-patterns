<?php

namespace App\Factory\Calculatrice;

use App\Factory\Calculatrice\Interfaces\CalculationInterface;

class SoustractionCalculation implements CalculationInterface
{
    public function calculation($n1, $n2)
    {
        return $n1 - $n2;
    }
}