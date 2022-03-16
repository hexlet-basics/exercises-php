<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Basics\Tags;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = 'Talk is cheap. Show me the code.';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
