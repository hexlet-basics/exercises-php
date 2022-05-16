<?php

namespace HexletBasics\DefineFunctions\ReadingDocumentation;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(getAge(10) === 10.0);
        assert(getAge(9.1) === 9.0);
        assert(getAge(8.9) === 8.0);
        assert(getAge(8.5) === 8.0);
    }
}
