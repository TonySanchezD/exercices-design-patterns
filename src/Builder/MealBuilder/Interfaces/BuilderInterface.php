<?php

namespace App\Builder\MealBuilder\Interfaces;

use App\Builder\MealBuilder\Interfaces\BurgerInterface;
use App\Builder\MealBuilder\Interfaces\DrinkInterface;
use App\Builder\MealBuilder\Menu;



Interface BuilderInterface
{
    public function getMenu(): Menu;
    public function setBurger(BurgerInterface $burger): self;
    public function setDrink(DrinkInterface $drink): self;
}