<?php

namespace HexletBasics\DefineFunctions\NamedArguments;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->assertEquals('python', trimAndRepeat('python'));
        $this->assertEquals('on', trimAndRepeat('python', offset: 4));
        $this->assertEquals('pythonpython', trimAndRepeat('python', repetitions: 2));
        $this->assertEquals('onon', trimAndRepeat('python', offset: 4, repetitions: 2));
    }
}
