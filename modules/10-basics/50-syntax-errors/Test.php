<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Basics\SyntaxErrors;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = 'The best error message is the one that never shows up.';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
