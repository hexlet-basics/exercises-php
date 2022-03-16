<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Variables\Heredoc;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = <<<EOT
“I would rather have questions that can’t be answered than answers that can’t be questioned.”
― Richard Feyman
EOT;
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
