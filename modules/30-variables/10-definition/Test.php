<?php

namespace HexletBasics\Variables\Definition;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'What Is Dead May Never Die!';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
