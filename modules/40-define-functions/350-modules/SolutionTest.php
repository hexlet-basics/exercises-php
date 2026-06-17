<?php

namespace HexletBasics\DefineFunctions\Modules;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'Solution.php';

        $this->assertEquals(75, amountPerPerson(300, 4, 0));
        $this->assertEquals(90, amountPerPerson(300, 4, 20));
        $this->assertEquals(129, amountPerPerson(350, 3, 10));
        $this->assertEquals(34, amountPerPerson(100, 3, 0));
    }
}
