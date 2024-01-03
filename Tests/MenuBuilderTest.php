<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Builder\MealBuilder\MenuBuilder;
use App\Builder\MealBuilder\Drink\Drinks;
use App\Builder\MealBuilder\Burger\Burgers;
use App\Builder\MealBuilder\Burger\Burger;
use App\Builder\MealBuilder\Drink\Drink;




final class MenuBuilderTest extends TestCase {

	public function testMenuBuilder()
	{
		$builder1 = new MenuBuilder();
		$menu1 = $builder1->setBurger(new Burger(Burgers::Vege))
            ->setDrink(new Drink(Drinks::Eau))
            ->getMenu();

        $builder2 = new MenuBuilder();
        $menu2 = $builder2->setBurger(new Burger(Burgers::Chicken))
            ->setDrink(new Drink(Drinks::Sprite))
            ->getMenu();

        dump("menu1", $menu1);
        dump("menu2", $menu2);
    }

}