<?php

namespace HexletBasics;

use PHPUnit\Framework\TestCase;

final class SyntaxErrorsTest extends TestCase
{
    public function testIndex()
    {
        $expected = 'The King Of North!';
        $this->expectOutputString($expected);
        require __DIR__ . '/index.php';
    }
}
