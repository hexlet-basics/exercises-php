<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $expected1 = 'Tywin Lannister';
        $actual1 = getCustomParentFor('Cersei Lannister');
        assert($actual1 === $expected1);
        $expected2 = 'Rhaella Targaryen';
        $actual2 = getCustomParentFor('Daenerys Targaryen', 'mother');
        assert($actual2 === $expected2);
    }
}
