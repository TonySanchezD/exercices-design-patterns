<?php

namespace App\Builder\MealBuilder;

class Menu 
{
    protected $burger;
    protected $drink;
    protected $price;

    public function __construct($burger, $drink)
    {
        $this->burger = $burger->name;
        $this->drink = $drink->name;
        $this->price = $burger->price + $drink->price;
    }
}