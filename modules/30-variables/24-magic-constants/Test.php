<?php

namespace HexletBasics;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $this->expectOutputString(__DIR__);
        require 'index.php';
    }
}
