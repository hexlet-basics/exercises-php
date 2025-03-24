<?php

namespace HexletBasics\Logic\LogicalNegation;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertFalse(isNotPalindrome('wow'));
        $this->assertFalse(isNotPalindrome('asdffdsa'));
        $this->assertFalse(isNotPalindrome('Wow'));
        $this->assertTrue(isNotPalindrome('hexlet'));
    }
}
