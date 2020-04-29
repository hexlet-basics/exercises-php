<?php

namespace HexletBasics\Conditionals\IfStatement;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(getSentenceTone('normal') === 'normal');
        assert(getSentenceTone('normal?') === 'normal');
        assert(getSentenceTone('NoRmal?') === 'normal');
        assert(getSentenceTone('SCREAM') === 'scream');
        assert(getSentenceTone('SCREAM!') === 'scream');
    }
}
