<?php

namespace HexletBasics;

use PHPUnit\Framework\TestCase;

final class HelloWorldTest extends TestCase
{
    public function testIndex()
    {
        require __DIR__ . '/index.php';
        $expected = 'Winter is coming!';
        $this->expectOutputString($expected);
    }
}
