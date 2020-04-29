<?php

namespace HexletBasics\DefineFunctions\Define;

use PHPUnit\Framework\TestCase;

require 'index.php';

class Test extends TestCase
{
    public function test1()
    {
        $expected = 'JAIME: Farewell, my friend...';
        $this->expectOutputString($expected);
        printJaimesLine('Farewell, my friend...');
    }

    public function test2()
    {
        $expected = 'JAIME: attack!';
        $this->expectOutputString($expected);
        printJaimesLine('attack!');
    }
}
