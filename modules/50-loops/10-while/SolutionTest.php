<?php

namespace HexletBasics\Loops\WhileLoop;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "4\n3\n2\n1\nGo!";
        $this->assertOutputOf(fn () => printCountdown(4), $expected);
    }
}
