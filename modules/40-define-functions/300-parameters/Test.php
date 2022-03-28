<?php

namespace HexletBasics\DefineFunctions\Parameters;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(truncate('Hexlet', 3) === 'Hex...');
        assert(truncate('Hello world', 5) === 'Hello...');
    }
}
