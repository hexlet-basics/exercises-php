<?php

namespace HexletBasics\Basics\Comments;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->assertOutput('');
        $content = file_get_contents('Solution.php');
        $this->assertStringContainsString('// TODO: добавить функцию приветствия', $content);
    }
}
