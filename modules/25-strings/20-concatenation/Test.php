<?php

namespace HexletBasics\Strings\Concatenation;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'Winter came for the House of Frey.';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
