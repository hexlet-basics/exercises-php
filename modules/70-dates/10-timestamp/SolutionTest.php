<?php

namespace HexletBasics\Dates\Timestamp;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals(2018, getYear(1532435204));
        $this->assertEquals(1986, getYear(532435204));
        $this->assertEquals(1970, getYear(5324352));
    }
}
