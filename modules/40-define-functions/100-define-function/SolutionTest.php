<?php

namespace HexletBasics\DefineFunctions\DefineFunction;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $expected = 'Hello, World!';
        $this->expectOutputString($expected);
        sayHello();
    }
}
