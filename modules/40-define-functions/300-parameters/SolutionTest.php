<?php

namespace HexletBasics\DefineFunctions\Parameters;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals('Hex...', truncate('Hexlet', 3));
        $this->assertEquals('Hello...', truncate('Hello world', 5));
    }
}
