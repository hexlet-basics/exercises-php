<?php

namespace HexletBasics\Loops\IterationOverString;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'Solution.php';

        $this->assertEquals('************5678', maskCardNumber('1234567812345678'));
        $this->assertEquals('****5678', maskCardNumber('12345678'));
        $this->assertEquals('************3333', maskCardNumber('0000111122223333'));
    }
}
