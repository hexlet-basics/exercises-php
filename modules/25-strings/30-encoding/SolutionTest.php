<?php

namespace HexletBasics\Strings\Encoding;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "~\n^\n%\n";
        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
