<?php

namespace HexletBasics\DeepIntoStrings\Unicode;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';
        $this->assertEquals('ONE', invertCase('one'));
        $this->assertEquals('two', invertCase('TWO'));
        $this->assertEquals('tHrEE', invertCase('ThRee'));
        $this->assertEquals('пРиВеТ!', invertCase('ПрИвЕт!'));
    }
}
