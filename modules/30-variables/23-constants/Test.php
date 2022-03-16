<?php

namespace HexletBasics\Variables\Constants;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';
        assert(PLANETS_COUNT === 8);
    }
}
