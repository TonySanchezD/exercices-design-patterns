<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Factory\Shopping\Shop;
use App\Factory\Shopping\MyShopProductFactory;

final class ShoppingFactoryTest extends TestCase {

	public function testThatBuilderWorks()
	{
        $shop = new Shop(new MyShopProductFactory);
        

        $productsToList = ['BumperSticker1', 'CoffeeTableBook5'];

        $targetOutput = <<<EOS
        BumperSticker1 - Cool bumper sticker
        CoffeeTableBook5 - Coffee Table book
        EOS;
        
        $this->assertEquals($targetOutput, $shop->listProducts($productsToList));
    }
}