<?php

namespace HexletBasics\Basics\Testing;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = '9780262531962';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
