<?php

namespace HexletBasics\DefineFunctions\DefaultReturn;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $actual = getNull();
        assert($actual === null);
    }
}
