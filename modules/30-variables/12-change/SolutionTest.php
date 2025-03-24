<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Variables\Change;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'anneirB';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
