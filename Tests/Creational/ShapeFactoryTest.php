<?php declare(strict_types=1);

namespace Tests\Creational;

use App\Factory\Shape\ShapeFactory;
use App\Factory\Shape\Shapes\Circle;
use App\Factory\Shape\Shapes\Rectangle;
use App\Factory\Shape\Shapes\Triangle;
use App\Exceptions\ShapeUnknownException;
use App\Exceptions\DontImplementsInterfaceException;
use PHPUnit\Framework\TestCase;

final class ShapeFactoryTest extends TestCase {
	
	public function testThatFactoryIsWorking()
	{
		$circle = ShapeFactory::build('circle');
		
		$this->assertInstanceOf(Circle::class, $circle);
	}

	public function testThatShapeUnknownExceptionIsThrown()
	{
		$this->expectException(ShapeUnknownException::class);
		$star = ShapeFactory::build('star');
		$star->draw();
	}

	public function testThatFactoryIsWorkingAndRectangle()
	{
		$circle = ShapeFactory::build('rectangle');
		
		$this->assertInstanceOf(Rectangle::class, $circle);
	}

	public function testThatShapeDontImplementInterface()
	{
		$this->expectException(DontImplementsInterfaceException::class);
		$triangle = ShapeFactory::build('triangle');
		
		$star->draw();
	}
}