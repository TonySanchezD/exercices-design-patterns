<?php

namespace App\Factory\Ship\Ships;

use App\Factory\Ship\Ships\AbstractShip;

class BigShip extends AbstractShip
{
    public string $name = "Big ship";
    public int $damage = 30;
}