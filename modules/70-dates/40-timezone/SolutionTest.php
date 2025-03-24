<?php

namespace HexletBasics\Loops\Timezone;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'UTC';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
