<?php

namespace HexletBasics\CallingFunctions\SideEffects;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'Rhaella Targaryen';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
