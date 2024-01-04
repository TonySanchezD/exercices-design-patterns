<?php

namespace App\Factory\Ship;

use App\Factory\Ship\Ships\LittleShip;
use App\Factory\Ship\Ships\NormalShip;
use App\Factory\Ship\Ships\BigShip;
use App\Factory\Ship\Ships\VeryBigShip;
use App\Factory\Ship\Interfaces\ShipInterface;



class ShipFactory
{
    private $dommage = [
        "E" => LittleShip::class,
        "R" => NormalShip::class,
        "U" => BigShip::class,
        "B" => VeryBigShip::class,
    ];

    public function build(string $letter): ShipInterface
    {
        return new $this->dommage[$letter];
    }
}