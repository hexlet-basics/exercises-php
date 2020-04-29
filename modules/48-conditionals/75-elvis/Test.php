<?php

namespace HexletBasics\Conditionals\Elvis;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(generateAmount(0, 2) === 6);
        assert(generateAmount(0, 5) === 15);
        assert(generateAmount(1, 2) === 1);
        assert(generateAmount(15, 16) === 15);
    }
}
