<?php

namespace App\Exceptions;

use Exception;

class ShapeUnknownException extends Exception
{
    public function __construct($className)
    {
        $message = "La forme " . $className . " n'existe pas!";
        dump($message);
        parent::__construct($message);
    }
}