<?php

namespace App\Factory\Ship\Interfaces;

Interface ShipInterface
{
    public function getName(): string;
    public function giveDamage(): int;
}