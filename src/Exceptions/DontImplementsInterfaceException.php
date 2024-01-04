<?php

namespace App\Exceptions;

use Exception;

class DontImplementsInterfaceException extends Exception
{
    public function __construct($className, $interface)
    {
        $message = "La class " . $className . " n'implemente pas l'interface " . $interface;
        dump($message);
        parent::__construct($message);
    }
}