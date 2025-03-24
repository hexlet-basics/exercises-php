<?php

namespace HexletBasics\DefineFunctions\ReturnInstruction;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $expected = 'hurray! hurray! hurray!';
        $this->assertEquals($expected, sayHurrayThreeTimes());
    }
}
