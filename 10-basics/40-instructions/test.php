<?php

namespace HexletBasics;

use PHPUnit\Framework\TestCase;

final class InstructionsTest extends TestCase
{
    public function testIndex()
    {
        $expected = "RobertStannisRenli";
        $this->expectOutputString($expected);
        require __DIR__ . '/index.php';
    }
}
