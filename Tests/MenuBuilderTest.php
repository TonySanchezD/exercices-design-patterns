<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Builder\MenuBuilder;
use App\Builder\Drinks;
use App\Builder\Burgers;


final class MenuBuilderTest extends TestCase {

	public function testMenuBuilder()
	{
		$builder = new MenuBuilder();
		$menu1 = $builder->setBurger(Burgers::Vege)
            ->setDrink(Drinks::Eau)
            ->getMenu();

        dd($menu1);
        $this->assertEquals($query, "SELECT name, price FROM products LIMIT 5, 10");


    }

}