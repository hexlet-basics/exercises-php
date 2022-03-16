<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Basics\Instructions;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = 'RomanMichaelStephen';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
