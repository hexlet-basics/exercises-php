<?php

namespace HexletBasics\Logic\LogicalNegation;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'Solution.php';

        $this->assertFalse(isNotPalindrome('wow'));
        $this->assertFalse(isNotPalindrome('asdffdsa'));
        $this->assertFalse(isNotPalindrome('Wow'));
        $this->assertTrue(isNotPalindrome('hexlet'));
    }
}
