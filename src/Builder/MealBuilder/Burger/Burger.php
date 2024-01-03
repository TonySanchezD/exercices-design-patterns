<?php

namespace App\Builder\MealBuilder\Burger;

use App\Builder\MealBuilder\Interfaces\BurgerInterface;

class Burger implements BurgerInterface
{
    public $name;
    public $price;

    public function __construct($burger)
    {
        $this->name = $burger["name"];
        $this->price = $burger["price"];
    }
}