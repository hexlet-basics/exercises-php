<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Arithmetics\Commutativity;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '2432';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
