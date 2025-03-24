<?php

namespace HexletBasics\Loops\ReverseString;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals('got', mysubstr('got', 3));
        $this->assertEquals('go', mysubstr('got', 2));
        $this->assertEquals('g', mysubstr('got', 1));
    }
}
