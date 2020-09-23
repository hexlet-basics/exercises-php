<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Arithmetics\Linting;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = '9';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
