<?php

namespace HexletBasics\DefineFunctions\Define;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $expected = 'Winter is coming';
        $this->expectOutputString($expected);
        printMotto();
    }
}
