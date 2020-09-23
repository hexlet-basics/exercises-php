<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\DataTypes\TypeConversion;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = '2 times';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
