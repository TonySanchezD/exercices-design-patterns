<?php

namespace App\Builder\DesktopBuilder\Hardware;

use App\Builder\DesktopBuilder\Interfaces\PartInterface;

abstract class AbstarctPart implements PartInterface
{
    public $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}