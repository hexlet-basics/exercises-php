<?php

namespace HexletBasics;

use PHPUnit\Framework\TestCase;

final class CommentsTest extends TestCase
{
    public function testIndex()
    {
        $actual = require __DIR__ . '/index.php';
        $this->assertEquals($actual, 1);
    }
}
