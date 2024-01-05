<?php

namespace App\AbstractFactory;

interface ShopFactoryInterface {
    public function createProduct($productCode);
    public function createShippingMethod($name);
}