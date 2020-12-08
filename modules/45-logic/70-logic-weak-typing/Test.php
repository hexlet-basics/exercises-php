<?php

namespace HexletBasics\Logic\WeakTyping;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(isFalsy(''));
        assert(!isFalsy(' '));
        assert(isFalsy(null));
        assert(isFalsy(false));
        assert(!isFalsy(true));
        assert(!isFalsy(3));
    }
}
