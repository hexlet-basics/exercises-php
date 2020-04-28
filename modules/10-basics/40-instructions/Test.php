<?php

namespace HexletBasics\Basics\Instructions;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'RobertStannisRenly';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
