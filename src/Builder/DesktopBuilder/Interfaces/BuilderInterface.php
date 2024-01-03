<?php

namespace App\Builder\DesktopBuilder\Interfaces;

use App\Builder\DesktopBuilder\Interfaces\PartInterface;
use App\Builder\DesktopBuilder\Interfaces\ComputerInterface;

Interface BuilderInterface
{
    public function getComputer(): ComputerInterface;
    public function setPart(PartInterface $part): self;
}