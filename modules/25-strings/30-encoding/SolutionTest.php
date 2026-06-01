<?php

namespace HexletBasics\Strings\Encoding;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "~^%";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
