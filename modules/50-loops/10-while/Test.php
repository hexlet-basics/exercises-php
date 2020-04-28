<?php

namespace HexletBasics\Loops\WhileLoop;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = "3\n2\n1\nfinished!";
        $this->expectOutputString($expected);
        printNumbers(3);
    }
}
