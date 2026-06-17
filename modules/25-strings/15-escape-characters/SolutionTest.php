<?php

namespace HexletBasics\Strings\EscapeCharacters;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "Для разделения строк используйте \"\\n\"\nПример: print_r(\"строка1\\nстрока2\")";
        $this->expectOutputString($expected);
        require 'Solution.php';
    }
}
