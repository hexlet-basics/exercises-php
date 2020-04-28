<?php

namespace HexletBasics\Dates\Timestamp;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        assert(getYear(1532435204) === 2018);
        assert(getYear(532435204) === 1986);
        assert(getYear(5324352) === 1970);
    }
}
