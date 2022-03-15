<?php

namespace HexletBasics\DefineFunctions\Define;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $expected = 'Per aspera ad astra';
        $this->expectOutputString($expected);
        printMotto();
    }
}
