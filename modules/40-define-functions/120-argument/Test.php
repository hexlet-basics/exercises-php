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
        $expected = 'LINE: Farewell, my friend...';
        $this->expectOutputString($expected);
        printLine('Farewell, my friend...');
    }

    public function test2()
    {
        $expected = 'LINE: Good morning!';
        $this->expectOutputString($expected);
        printLine('Good morning!');
    }
}
