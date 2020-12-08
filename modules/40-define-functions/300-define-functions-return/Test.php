<?php

namespace HexletBasics\DefineFunctions\ReturnInstruction;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $expected = 35;
        assert(getParentNamesTotalLength('Daenerys Targaryen') === $expected);
    }
}
