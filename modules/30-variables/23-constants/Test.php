<?php

namespace HexletBasics\Variables\Constants;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';
        assert(DRAGONS_BORN_COUNT === 3);
    }
}
