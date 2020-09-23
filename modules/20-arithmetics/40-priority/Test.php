<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Arithmetics\Priority;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = '49';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
