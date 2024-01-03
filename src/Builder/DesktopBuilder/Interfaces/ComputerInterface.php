<?php

namespace App\Builder\DesktopBuilder\Interfaces;

use App\Builder\DesktopBuilder\Interfaces\PartInterface;

Interface ComputerInterface
{
    public function getComponent(string $part): PartInterface;
}