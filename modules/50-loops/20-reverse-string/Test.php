<?php

namespace HexletBasics\Loops\ReverseString;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        assert(mysubstr('got', 3) === 'got');
        assert(mysubstr('got', 2) === 'go');
        assert(mysubstr('got', 1) === 'g');
    }
}
