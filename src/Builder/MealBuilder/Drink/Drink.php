<?php

namespace App\Builder\MealBuilder\Drink;

use App\Builder\MealBuilder\Interfaces\DrinkInterface;

class Drink implements DrinkInterface
{
    public $name;
    public $price;

    public function __construct($drink)
    {
        $this->name = $drink["name"];
        $this->price = $drink["price"];

    }
}