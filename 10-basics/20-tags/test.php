<?php

namespace HexletBasics;

use PHPUnit\Framework\TestCase;

final class TagsTest extends TestCase
{
    public function testIndex()
    {
        $expected = 'King in the North!';
        $this->expectOutputString($expected);
        require __DIR__ . '/index.php';
    }
}
