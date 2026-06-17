<?php

namespace HexletBasics\Loops\Debug;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'Solution.php';

        $this->assertEquals('a3bc4', compress('aaabcccc'));
        $this->assertEquals('abcd', compress('abcd'));
        $this->assertEquals('a2b2a2', compress('aabbaa'));
        $this->assertEquals('a', compress('a'));
        $this->assertEquals('', compress(''));
        $this->assertEquals('z3', compress('zzz'));
    }
}
