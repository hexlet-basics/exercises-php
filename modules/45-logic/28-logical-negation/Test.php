<?php

namespace HexletBasics\Logic\LogicalNegation;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(isNotPalindrome('wow') === false);
        assert(isNotPalindrome('hexlet') === true);
        assert(isNotPalindrome('asdffdsa') === false);
        assert(isNotPalindrome('Wow') === false);

    }
}
