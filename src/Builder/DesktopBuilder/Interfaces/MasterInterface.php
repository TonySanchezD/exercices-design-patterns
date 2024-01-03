<?php

namespace App\Builder\DesktopBuilder\Interfaces;

use App\Builder\DesktopBuilder\Interfaces\BuilderInterface;
use App\Builder\DesktopBuilder\Interfaces\ComputerInterface;

Interface MasterInterface
{
    public function build(): ComputerInterface;
    public function setBuilder(BuilderInterface $builder): void;
    public function getBuilder(): BuilderInterface;
}