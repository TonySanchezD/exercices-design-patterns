<?php

namespace App\Factory\Shopping;

use App\Factory\Shopping\Interfaces\ProductFactoryInterface;
use App\Factory\Shopping\MyShopProduct;



class MyShopProductFactory implements ProductFactoryInterface
{
    public $database = [
        'BumperSticker1' => 'Cool bumper sticker',
        'CoffeeTableBook5' => 'Coffee Table book',
    ];

    public function createProduct($productCode)
    {
        $description = $this->database[$productCode];
        return new MyShopProduct($productCode, $description);
    }
}      
