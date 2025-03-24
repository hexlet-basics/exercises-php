<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $expected1 = '****1234';
        $actual1 = getHiddenCard('1234123412341234');
        $this->assertEquals($expected1, $actual1);

        $expected2 = '**4321';
        $actual2 = getHiddenCard('1234123412344321', 2);
        $this->assertEquals($expected2, $actual2);
    }
}
