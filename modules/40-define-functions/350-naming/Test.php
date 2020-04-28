<?php

namespace HexletBasics\DefineFunctions\Naming;

class Test extends TestCase
{
    public function test()
    {
        $expected = '01-01-2001';
        $actual = getFormattedBirthday(1, 1, 2001);
        assert($actual === $expected);
    }
}
