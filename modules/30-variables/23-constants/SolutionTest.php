<?php

namespace HexletBasics\Variables\Constants;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';
        $this->assertEquals(3, DRAGONS_BORN_COUNT);
    }
}
