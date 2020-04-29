<?php

namespace HexletBasics\Logic\CombineExpressions;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(!hasTargaryenReference(''));
        assert(!hasTargaryenReference('Targari'));
        assert(!hasTargaryenReference('targaryen'));
        assert(hasTargaryenReference('Targaryen'));
        assert(hasTargaryenReference('Targaryen Daenerys'));
    }
}
