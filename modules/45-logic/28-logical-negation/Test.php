<?php

namespace HexletBasics\Logic\LogicalNegation;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(!isNotPalindrome('wow'));
        assert(isNotPalindrome('hexlet'));
        assert(!isNotPalindrome('asdffdsa'));
        assert(isNotPalindrome('Wow'));
    }
}
