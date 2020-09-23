<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $this->expectOutputString(__DIR__);
        require 'index.php';
    }
}
