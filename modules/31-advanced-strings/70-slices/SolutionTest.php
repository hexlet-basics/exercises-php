<?php

namespace HexletBasics\AdvancedStrings\Slices;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'hexlet.io';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
