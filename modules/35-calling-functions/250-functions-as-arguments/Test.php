<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\CallingFunctions\FunctionsAsArguments;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = '1999-12-31 23:59:59';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
