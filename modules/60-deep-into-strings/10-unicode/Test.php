<?php

namespace HexletBasics\DeepIntoStrings\Unicode;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';
        assert(invertCase('one') === 'ONE');
        assert(invertCase('TWO') === 'two');
        assert(invertCase('ThRee') === 'tHrEE');
        assert(invertCase('ПрИвЕт!') === 'пРиВеТ!');
    }
}
