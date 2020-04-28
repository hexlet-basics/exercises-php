<?php

namespace HexletBasics\Variables\Errors;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'Targaryen and Dragon';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
