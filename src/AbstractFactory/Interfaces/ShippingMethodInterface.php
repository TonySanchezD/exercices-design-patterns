<?php

namespace App\AbstractFactory;

interface ShippingMethodInterface {
    public function getName();
    public function getCostEstimate($miles, ProductInterface $product);
}