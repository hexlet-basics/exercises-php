<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\DataTypes\PrimitiveDataTypes;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = '-0.304';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
