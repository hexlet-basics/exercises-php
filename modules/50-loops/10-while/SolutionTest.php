<?php

namespace HexletBasics\Loops\WhileLoop;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $expected = "4\n3\n2\n1\nGo!";
        $this->expectOutputString($expected);
        printCountdown(4);
    }
}
