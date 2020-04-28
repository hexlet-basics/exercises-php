<?php

namespace HexletBasics\Arithmetics\EscapeCharacters;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = "- Did Joffrey agree?\n- He did. He also said \"I love using \\n\".";
        $this->expectOutputString($expected);
        require 'index.php';
    }
}
