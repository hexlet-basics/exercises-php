<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Variables\Naming;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "-110";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
