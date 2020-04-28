<?php

namespace HexletBasics\DeepIntoStrings\StartWith;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        assert(startsWith('one', 'o'));
        assert(!startsWith('one', 'ne'));
        assert(startsWith('one', 'on'));
        assert(startsWith('one', 'one'));
    }
}
