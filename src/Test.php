<?php

namespace HexletBasics\Test;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require_once './index.php';
        $f();

        assert(min(1, 3) === 3);
    }
}
