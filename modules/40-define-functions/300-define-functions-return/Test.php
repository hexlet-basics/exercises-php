<?php

namespace HexletBasics\DefineFunctions\ReturnInstruction;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $expected = date("Y");
        assert(getCurrentYear() === $expected);
    }
}
