<?php

namespace HexletBasics\Conditionals\SwitchStatement;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->assertEquals('just a number', getNumberExplanation(0));
        $this->assertEquals('devil number', getNumberExplanation(666));
        $this->assertEquals('answer for everything', getNumberExplanation(42));
        $this->assertEquals('prime number', getNumberExplanation(7));
    }
}
