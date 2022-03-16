<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\CallingFunctions\SideEffects;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = 'Catherine';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
