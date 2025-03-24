<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\DataTypes\WeakTyping;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '13';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
