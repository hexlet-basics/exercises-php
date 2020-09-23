<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Variables\Heredoc;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = <<<EOT
Lannister, Targaryen, Baratheon, Stark, Tyrell... they're all just spokes on a wheel.
This one's on top, then that one's on top, and on and on it spins, crushing those on the ground.
EOT;
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
