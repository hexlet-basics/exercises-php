<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\CallingFunctions\Call;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = "12";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
