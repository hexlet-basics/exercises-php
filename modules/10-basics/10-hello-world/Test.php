<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Basics\HelloWorld;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = 'Hello, World!';
        $this->expectOutputString($expected);
        require 'index.php';
    }

    public function setUp(): void
    {
        \HexletBasics\Functions\runScript();
    }
}
