<?php

namespace HexletBasics\Loops\Timezone;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'UTC';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
