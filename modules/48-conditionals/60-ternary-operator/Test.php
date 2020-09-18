<?php

namespace HexletBasics\Logic\TernaryOperator;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(convertText('hey') === 'yeh');
        assert(convertText('Hey') === 'Hey');
    }
}
