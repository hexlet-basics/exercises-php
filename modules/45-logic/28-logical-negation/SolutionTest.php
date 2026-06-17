<?php

namespace HexletBasics\Logic\LogicalNegation;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->assertFalse(isNotPalindrome('wow'));
        $this->assertFalse(isNotPalindrome('asdffdsa'));
        $this->assertFalse(isNotPalindrome('Wow'));
        $this->assertTrue(isNotPalindrome('hexlet'));
    }
}
