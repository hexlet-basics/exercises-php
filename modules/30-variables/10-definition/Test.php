<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Variables\Definition;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = 'What Is Dead May Never Die!';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
