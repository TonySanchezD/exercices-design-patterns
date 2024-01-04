<?php

namespace App\Factory\Ship\Ships;

use App\Factory\Ship\Interfaces\ShipInterface;

abstract class AbstractShip implements ShipInterface
{
    public string $name;
    public int $damage;

    public function getName(): string
    {
        return $this->name;
    }

    public function giveDamage(): int
    {
        return $this->damage;
    }
}