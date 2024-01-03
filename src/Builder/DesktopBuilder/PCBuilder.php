<?php

namespace App\Builder\DesktopBuilder;

use App\Builder\DesktopBuilder\Interfaces\PartInterface;
use App\Builder\DesktopBuilder\Interfaces\BuilderInterface;
use App\Builder\DesktopBuilder\Interfaces\ComputerInterface;


class PCBuilder implements BuilderInterface
{
    private $components = [];

    public function getComputer(): ComputerInterface
    {
        return new Desktop($this->components);
    }

    public function setPart(PartInterface $part): self
    {
        $this->components[get_class($part)] = $part;

        return $this;
    }
}

