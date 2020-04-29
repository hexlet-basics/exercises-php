<?php

namespace HexletBasics\Conditionals\SwitchStatement;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(getNumberExplanation(0) === null);
        assert(getNumberExplanation(666) === 'devil number');
        assert(getNumberExplanation(42) === 'answer for everything');
        assert(getNumberExplanation(7) === 'prime number');
    }
}
