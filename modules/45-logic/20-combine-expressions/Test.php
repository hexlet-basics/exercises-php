<?php

namespace HexletBasics\Logic\CombineExpressions;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(!isInternationalPhone('89602223423'));
        assert(isInternationalPhone('+79602223423'));
    }
}
