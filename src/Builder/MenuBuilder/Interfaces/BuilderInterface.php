<?php

namespace App\Builder\Interfaces;

Interface BuilderInterface
{
    public function getMenu();
    public function setBurger($burger): self;
    public function setDrink($drink): self;
}