<?php

namespace HexletBasics\DeepIntoStrings\StartWith;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';
        $this->assertTrue(startsWith('one', 'o'));
        $this->assertFalse(startsWith('one', 'ne'));
        $this->assertTrue(startsWith('one', 'on'));
        $this->assertTrue(startsWith('one', 'one'));
    }
}
