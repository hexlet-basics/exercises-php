<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Arithmetics\Operator;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '87';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
