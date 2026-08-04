<?php

namespace HexletBasics\Basics\SyntaxErrors;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'Program started successfully';
        $this->assertOutput($expected);
    }
}
