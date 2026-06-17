<?php

namespace HexletBasics\Variables\Constants;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(3, MAX_LOGIN_ATTEMPTS);
    }
}
