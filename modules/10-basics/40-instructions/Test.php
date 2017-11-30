<?php

namespace HexletBasics;

use PHPUnit\Framework\TestCase;

final class InstructionsTest extends TestCase
{
    public function testIndex()
    {
        $expected = "RobertStannisRenly";
        $this->expectOutputString($expected);
        require __DIR__ . '/index.php';
    }
}
