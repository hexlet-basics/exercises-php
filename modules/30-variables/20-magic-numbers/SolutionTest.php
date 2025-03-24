<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Variables\MagicNumbers;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'King Balon the 6th has 102 rooms.';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
