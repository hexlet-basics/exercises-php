<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Variables\Interpolation;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'Do you want to eat, Arya?';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
