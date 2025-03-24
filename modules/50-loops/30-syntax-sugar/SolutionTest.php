<?php

namespace HexletBasics\Loops\SyntaxSugar;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $text = 'If I look back I am lost';
        $result1 = filterString($text, 'I');
        $this->assertEquals('f  look back  am lost', $result1);

        $result2 = filterString('zz zorro', 'z');
        $this->assertEquals(' orro', $result2);
    }
}
