<?php

namespace HexletBasics\Loops\ConditionsInsideLoops;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(countChars('axe', 'a') === 1);
        assert(countChars('', 'a') === 0);
        assert(countChars('OpPa', 'p') === 2);
        assert(countChars('OpPa', 'P') === 2);
    }
}
