<?php

namespace HexletBasics\Logic\Predicates;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertFalse(isMister('8234782'));
        $this->assertFalse(isMister('Joker'));
        $this->assertTrue(isMister('Mister'));
    }
}
