<?php

namespace HexletBasics\DefineFunctions\NamedArguments;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals('python', trimAndRepeat('python'));
        $this->assertEquals('on', trimAndRepeat('python', offset: 4));
        $this->assertEquals('pythonpython', trimAndRepeat('python', repetitions: 2));
        $this->assertEquals('onon', trimAndRepeat('python', offset: 4, repetitions: 2));
    }
}
