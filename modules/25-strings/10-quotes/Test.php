<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Strings\Quotes;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = "\"Toto's favorite word is \"Hexlet\"\"";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
