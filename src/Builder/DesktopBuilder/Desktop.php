<?php

namespace App\Builder\DesktopBuilder;

use App\Builder\DesktopBuilder\Interfaces\ComputerInterface;
use App\Builder\DesktopBuilder\Interfaces\PartInterface;


class Desktop implements ComputerInterface
{
    private $components = [];

    public function __construct(array $part)
    {
        $this->components = $part;
    }

    public function getComponent(string $part): PartInterface
    {
        return $this->components[$part];
    }
}

