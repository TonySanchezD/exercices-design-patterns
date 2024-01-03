<?php

namespace App\Builder\DesktopBuilder\Interfaces;

Interface partInterface
{
    public function __construct(string $value);
    public function getValue(): string;
}