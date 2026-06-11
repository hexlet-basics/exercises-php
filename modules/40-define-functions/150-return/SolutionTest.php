<?php

namespace HexletBasics\DefineFunctions\ReturnInstruction;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals('he...', truncate('hexlet', 2));
        $this->assertEquals('it w...', truncate('it works!', 4));
    }
}
