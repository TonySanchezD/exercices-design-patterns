<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Factory\Calculatrice\OperationFactory; 

final class CalculatriceFactoryTest extends TestCase {

	public function testCalculatriceFactory()
	{
        $factory1 = new OperationFactory;
        $operation1 = $factory1->choiceFactory("Addition");
        $operation1->calculationType(2, 2);

        $factory2 = new OperationFactory;
        $operation2 = $factory2->choiceFactory("Soustraction");
        $operation2->calculationType(4, 2);

        dump("operation 1", $operation1);
        dd("operation 2", $operation2);
    }

}