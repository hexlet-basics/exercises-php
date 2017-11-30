<?php

namespace HexletBasics;

use PHPUnit\Framework\TestCase;

final class HelloWorldTest extends TestCase
{
    public function testIndex()
    {
        $expected = 'Winter is coming!';
        $this->expectOutputString($expected);
        require __DIR__ . '/index.php';
    }
}
