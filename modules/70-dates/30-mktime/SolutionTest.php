<?php

namespace HexletBasics\Dates\Mkdtime;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals(1325376000, getHexletBirthday());
    }
}
