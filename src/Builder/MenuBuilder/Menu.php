<?php

namespace App\Builder;

class Menu 
{
    protected $burger;
    protected $drink;
    protected $price;

    public function __construct($burger, $drink)
    {
        dd($burger, $drink);
    }
}