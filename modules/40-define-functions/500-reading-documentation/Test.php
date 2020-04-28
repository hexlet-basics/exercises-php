<?php

namespace HexletBasics\DefineFunctions\ReadingDocumentation;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        assert(getAge(10) === 10);
        assert(getAge(9.1) === 9);
        assert(getAge(8.9) === 9);
        assert(getAge(8.5) === 8);
    }
}
