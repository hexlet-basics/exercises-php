<?php

namespace HexletBasics\Basics\Comments;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = '';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
