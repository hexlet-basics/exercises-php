<?php

namespace HexletBasics\Conditionals\IfStatement;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals('Try again!', guessNumber(100500));
        $this->assertEquals('You win!', guessNumber(42));
    }
}
