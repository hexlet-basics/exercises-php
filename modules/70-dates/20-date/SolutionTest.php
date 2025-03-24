<?php

namespace HexletBasics\Dates\DateFunction;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals('24/07/2018', getCustomDate(1532435204));
        $this->assertEquals('15/11/1986', getCustomDate(532435204));
        $this->assertEquals('03/03/1970', getCustomDate(5324352));
    }
}
