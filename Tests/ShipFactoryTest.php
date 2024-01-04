<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Factory\Ship\ShipFactory; 


final class ShipFactoryTest extends TestCase {

	public function testLittleShipFactory()
	{
        $factory = new ShipFactory();

        $ship = $factory->build("E");

        $damage = $ship->giveDamage();
        $shipName = $ship->getName();
        dump($damage, $shipName);
    }

    public function testNormalShipFactory()
	{
        $factory = new ShipFactory();

        $ship = $factory->build("R");

        $damage = $ship->giveDamage();
        $shipName = $ship->getName();
        dump($damage, $shipName);
    }

    public function testBigShipFactory()
	{
        $factory = new ShipFactory();

        $ship = $factory->build("U");

        $damage = $ship->giveDamage();
        $shipName = $ship->getName();
        dump($damage, $shipName);
    }

    public function testVeryBigShipFactory()
	{
        $factory = new ShipFactory();

        $ship = $factory->build("B");

        $damage = $ship->giveDamage();
        $shipName = $ship->getName();
        dd($damage, $shipName);
    }
}