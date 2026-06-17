<?php

namespace HexletBasics\Strings\Encoding;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "~\n^\n%\n";
        $this->expectOutputString($expected);
    }
}
