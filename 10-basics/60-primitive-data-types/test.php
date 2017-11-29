<?php

namespace HexletBasics;

use PHPUnit\Framework\TestCase;

final class PrimitiveDataTypesTest extends TestCase
{
    public function testIndex()
    {
        $expected = '-0.304';
        $this->expectOutputString($expected);
        require __DIR__ . '/index.php';
    }
}
