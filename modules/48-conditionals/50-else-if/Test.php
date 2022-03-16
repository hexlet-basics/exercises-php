<?php

namespace HexletBasics\Conditionals\ElseIfStatement;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(whatIsThis('orange') === 'fruit');
        assert(whatIsThis('apple') === 'fruit');
        assert(whatIsThis('cabbage') === 'vegetable');
        assert(whatIsThis('banana') === 'other');
        assert(whatIsThis('plum') === 'other');
    }
}
