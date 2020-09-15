<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $expected = 'Tywin Lannister';
        $actual = getCustomParentFor('Cersei Lannister');
        assert($actual === $expected);
    }
}
