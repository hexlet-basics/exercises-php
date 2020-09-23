<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Arithmetics\EscapeCharacters;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        $expected = "- Did Joffrey agree?\n- He did. He also said \"I love using \\n\".";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
