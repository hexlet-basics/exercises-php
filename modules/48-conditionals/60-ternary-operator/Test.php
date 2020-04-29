<?php

namespace HexletBasics\Logic\TernaryOperator;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(convertString('hey') === 'yeh');
        assert(convertString('Hey') === 'Hey');
    }
}
