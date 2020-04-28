<?php

namespace HexletBasics\Dates\Mkdtime;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        assert(getHexletBirthday() === 1325376000);
    }
}
