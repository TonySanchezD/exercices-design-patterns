<?php

namespace App\Builder\MenuBuilder\Items;

use App\Builder\MenuBuilder\Interfaces\BurgerInterface;

class Burger implements BurgerInterface
{
    public $burger;

    public function __construct(array $burger)
    {
        $this->burger = $burger;
    }

    public function getValue(): array
    {
        return $this->burger;
    }
}