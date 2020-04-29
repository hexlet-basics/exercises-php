<?php

namespace HexletBasics\DefineFunctions\Naming;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $expected = '01-01-2001';
        $actual = getFormattedBirthday(1, 1, 2001);
        assert($actual === $expected);
    }
}
