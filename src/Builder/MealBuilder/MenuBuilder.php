<?php

namespace App\Builder\MealBuilder;

use App\Builder\MealBuilder\Menu;
use App\Builder\MealBuilder\Interfaces\BurgerInterface;
use App\Builder\MealBuilder\Interfaces\DrinkInterface;



class MenuBuilder
{
    public $burger;
    public $drink;

    public function getMenu(): Menu
    {
        return new Menu($this->burger, $this->drink);
    }

    public function setBurger(BurgerInterface $burger): self
    {
        $this->burger = $burger;
        return $this;
    }

    public function setDrink(DrinkInterface $drink): self
    {
        $this->drink = $drink;

        return $this;
    }
}