<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Variables\Errors;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = 'Targaryen and Dragon';
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
