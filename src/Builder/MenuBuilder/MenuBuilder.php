<?php

namespace App\Builder;

use App\Builder\Menu;

class MenuBuilder
{
    private $burger;
    private $drink;

    public function getMenu(): MenuInterface
    {
        return new Menu($this->$burger, $this->drink);
    }

    public function setBurger($burger): self
    {
        dd($burger);
        $this->burger = $burger;

        return $this;
    }

    public function setDrink($burger): self
    {
        $this->burger = $burger;

        return $this;
    }
}