<?php

namespace HexletBasics\Variables\Constants;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'Solution.php';
        $this->assertEquals(3, MAX_LOGIN_ATTEMPTS);
    }
}
