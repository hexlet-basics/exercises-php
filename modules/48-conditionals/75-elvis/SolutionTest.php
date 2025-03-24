<?php

namespace HexletBasics\Conditionals\Elvis;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals(6, generateAmount(0, 2));
        $this->assertEquals(15, generateAmount(0, 5));
        $this->assertEquals(1, generateAmount(1, 2));
        $this->assertEquals(15, generateAmount(15, 16));
    }
}
