<?php

namespace HexletBasics\Loops\WhileLoop;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'Solution.php';

        $expected = "4\n3\n2\n1\nGo!";
        $this->expectOutputString($expected);
        printCountdown(4);
    }
}
