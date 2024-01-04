<?php

namespace App\Factory\Ship\Ships;

use App\Factory\Ship\Ships\AbstractShip;

class VeryBigShip extends AbstractShip
{
    public string $name = "Very big ship";
    public int $damage = 40;
}