<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Strings\Encoding;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = "~^%";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
