<?php 

namespace App\Factory\Shape;

use App\Factory\Shape\Shapes\Circle;
use App\Factory\Shape\Shapes\Rectangle;
use App\Factory\Shape\Shapes\Triangle;
use App\Factory\Shape\Interfaces\ShapeInterface;
use App\Exceptions\ShapeUnknownException;
use App\Exceptions\DontImplementsInterfaceException;



class ShapeFactory {

	public static function build($shape)
	{
		$className = ucfirst($shape);
		$class = "App\Factory\Shape\Shapes\\" . $className;

		if (!class_exists($class)) {
			throw new ShapeUnknownException($className);
		}
		
		//Vérification de l'implementation de la ShapeInterface
		$shapeInterface = "App\Factory\Shape\Interfaces\ShapeInterface";
		$checkShapeInterface = in_array($shapeInterface, class_implements($class));
		
		if (in_array($shapeInterface, class_implements($class))) {
			return new $class;
		} else {
			throw new DontImplementsInterfaceException($className , $shapeInterface);
		}
	}
}