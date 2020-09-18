<?php

namespace HexletBasics\Conditionals\IfStatement;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';

        assert(getSentenceTone('general') === 'general');
        assert(getSentenceTone('general?') === 'general');
        assert(getSentenceTone('NoRmal?') === 'general');
        assert(getSentenceTone('SCREAM') === 'scream');
        assert(getSentenceTone('SCREAM!') === 'scream');
    }
}
