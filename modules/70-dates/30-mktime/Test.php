<?php

namespace HexletBasics\Dates\Mkdtime;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals(1325376000, getHexletBirthday());
    }
}
