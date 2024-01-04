<?php

namespace App\Factory\Ship\Ships;

use App\Factory\Ship\Ships\AbstractShip;
use App\Factory\Ship\Interfaces\ShipInterface;


class LittleShip extends AbstractShip
{
    public string $name = "Little ship";
    public int $damage = 10;

    public function __construct()
    {
        dump(class_implements(self::class));
    }
}