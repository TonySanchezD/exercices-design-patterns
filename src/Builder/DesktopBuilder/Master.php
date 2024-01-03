<?php

namespace App\Builder\DesktopBuilder;

use App\Builder\DesktopBuilder\Interfaces\MasterInterface;
use App\Builder\DesktopBuilder\Interfaces\BuilderInterface;
use App\Builder\DesktopBuilder\Interfaces\ComputerInterface;

class Master implements MasterInterface
{
    /**
     * @var BuilderInterface
     */
    private $builder;

    /**
     * @return ComputerInterface
     */
    public function build(): ComputerInterface
    {
        return $this->builder->getComputer();
    }

    /**
     * @return BuilderInterface
     */
    public function getBuilder(): BuilderInterface
    {
        return $this->builder;
    }

    /**
     * @param BuilderInterface $builder
     */
    public function setBuilder(BuilderInterface $builder): void
    {
        $this->builder = $builder;
    }
}