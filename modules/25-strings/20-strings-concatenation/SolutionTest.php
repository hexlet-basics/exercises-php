<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Strings\Concatenation;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'Winter came for the House of Frey.';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
