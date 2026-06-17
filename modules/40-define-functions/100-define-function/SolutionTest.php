<?php

namespace HexletBasics\DefineFunctions\DefineFunction;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'Hello, World!';
        $this->expectOutputString($expected);
        sayHello();
    }
}
