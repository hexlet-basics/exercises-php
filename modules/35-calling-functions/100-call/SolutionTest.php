<?php

namespace HexletBasics\CallingFunctions\Call;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "12";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
