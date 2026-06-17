<?php

namespace HexletBasics\Conditionals\IfStatement;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->assertEquals('Try again!', guessNumber(100500));
        $this->assertEquals('You win!', guessNumber(42));
    }
}
