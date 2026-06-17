<?php

namespace HexletBasics\DefineFunctions\DefineFunction;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'Solution.php';

        $expected = 'Hello, World!';
        $this->expectOutputString($expected);
        sayHello();
    }
}
