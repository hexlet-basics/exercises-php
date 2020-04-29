<?php

namespace HexletBasics\Loops\Mutators;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';
        $str = 'If I look back I am lost';
        assert(filterString($str, 'I') === 'f  look back  am lost');
        assert(filterString($str, 'o') === 'If I lk back I am lst');
    }
}
