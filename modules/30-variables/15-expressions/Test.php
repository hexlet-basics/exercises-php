<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Variables\Expressions;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = "125\n863.75";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
