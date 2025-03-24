<?php

namespace HexletBasics\DefineFunctions\ReadingDocumentation;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals(10.0, getAge(10));
        $this->assertEquals(9.0, getAge(9.1));
        $this->assertEquals(8.0, getAge(8.9));
        $this->assertEquals(8.0, getAge(8.5));
    }
}
