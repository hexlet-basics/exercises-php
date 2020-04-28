<?php

namespace HexletBasics\Variables\Concatenation;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        $expected = <<<HERE
Hello, Joffrey!
Here is important information about your account security.
We couldn't verify you mother's maiden name.
HERE;

        $this->expectOutputString($expected);
        require 'index.php';
    }
}
