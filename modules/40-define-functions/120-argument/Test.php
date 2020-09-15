<?php

namespace HexletBasics\DefineFunctions\Argument;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    protected function setUp(): void
    {
        require_once 'index.php';
    }

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
