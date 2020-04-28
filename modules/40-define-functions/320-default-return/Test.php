<?php

namespace HexletBasics\DefineFunctions\DefaultReturn;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $actual = getNull();
        assert($actual === null);
    }
}
