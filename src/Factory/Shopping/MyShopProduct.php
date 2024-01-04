<?php

namespace App\Factory\Shopping;

use App\Factory\Shopping\Interfaces\ProductInterface;


class MyShopProduct implements ProductInterface
{
    public $productCode;
    public $description;

    public function __construct($productCode, $description)
    {
        $this->productCode = $productCode;
        $this->description = $description;
    }

    public function getShopProductCode()
    {
        return $this->productCode;
    }

    public function getShopDescription()
    {
        return $this->description;
    }
}

