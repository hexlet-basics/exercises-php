<?php

namespace HexletBasics\DefineFunctions\Environment;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'The age difference is 17';
        $actual = getAgeDifference(2001, 2018);
        assert($actual === $expected);
    }
}
