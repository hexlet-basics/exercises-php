<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Basics\Testing;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = '9780262531962';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
