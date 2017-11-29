<?php

namespace HexletBasics;

use PHPUnit\Framework\TestCase;

final class SyntaxErrorsTest extends TestCase
{
    public function testIndex()
    {
        $expected = 'What Is Dead May Never Die';
        $this->expectOutputString($expected);
        require __DIR__ . '/index.php';
    }
}
