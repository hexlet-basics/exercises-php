<?php

namespace HexletBasics\Loops\AggregationStrings;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals('+79991234567', sanitizePhoneNumber('+7 (999) 123-45-67'));
        $this->assertEquals('88005553535', sanitizePhoneNumber('8 800 555 35 35'));
        $this->assertEquals('1234567890', sanitizePhoneNumber('(123) 456-7890'));
    }
}
