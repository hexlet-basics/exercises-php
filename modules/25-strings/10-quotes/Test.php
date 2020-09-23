<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Strings\Quotes;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = "\"Khal Drogo's favorite word is \"athjahakar\"\"";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
