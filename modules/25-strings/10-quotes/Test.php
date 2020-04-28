<?php

namespace HexletBasics\Strings\Quotes;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = "\"Khal Drogo's favorite word is \"athjahakar\"\"";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
