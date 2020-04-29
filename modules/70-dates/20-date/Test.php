<?php

namespace HexletBasics\Dates\DateFunction;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';
        assert(getCustomDate(1532435204) === '24/07/2018');
        assert(getCustomDate(532435204) === '15/11/1986');
        assert(getCustomDate(5324352) === '03/03/1970');
    }
}
