<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Variables\Symbols;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = 'hodor';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
