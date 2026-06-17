<?php

namespace HexletBasics\DefineFunctions\ReturnInstruction;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->assertEquals('he...', truncate('hexlet', 2));
        $this->assertEquals('it w...', truncate('it works!', 4));
    }
}
