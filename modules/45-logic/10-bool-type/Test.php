<?php

namespace HexletBasics\Logic\BoolType;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        assert(!isPensioner(23));
        assert(isPensioner(70));
        assert(isPensioner(60));
        assert(!isPensioner(59));
    }
}
