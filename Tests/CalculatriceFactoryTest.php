<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Factory\Calculatrice\AdditionFactory; 
use App\Factory\Calculatrice\SoustractionFactory; 


final class CalculatriceFactoryTest extends TestCase {

	public function testCalculatriceFactory()
	{
        $addition = new AdditionFactory;
        dump($addition->calcul(2, 4));

        $soustraction = new SoustractionFactory;
        dump($soustraction->calcul(2, 4));
    }
}