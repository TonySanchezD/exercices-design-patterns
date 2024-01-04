<?php

namespace App\Factory\Ship\Ships;

use App\Factory\Ship\Ships\AbstractShip;

class NormalShip extends AbstractShip
{
    public string $name = "Normal ship";
    public int $damage = 20;
}