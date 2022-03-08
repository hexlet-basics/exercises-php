<?php

namespace HexletBasics\Conditionals\IfStatement;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(guessNumber(100500) === 'Try again!');
        assert(guessNumber(42) === 'You win!');
    }
}
