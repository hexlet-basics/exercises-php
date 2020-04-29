<?php

namespace HexletBasics\DefineFunctions\Arguments;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $expected = '0-0-0-0-0-';
        $this->expectOutputString($expected);
        printSeq('0-', 5);
    }
}
