<?php

namespace HexletBasics\Basics\Comments;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->expectOutputString('');
        require 'index.php';
        $content = file_get_contents('index.php');
        $this->assertStringContainsString('// TODO: добавить функцию приветствия', $content);
    }
}
