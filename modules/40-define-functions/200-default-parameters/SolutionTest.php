<?php

namespace HexletBasics\DefineFunctions\DefaultParameters;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->assertEquals('****1234', getHiddenCard('1234123412341234'));
        $this->assertEquals('****4321', getHiddenCard('1234123412344321'));
        $this->assertEquals('***4321', getHiddenCard('1234123412344321', 3));
    }
}
