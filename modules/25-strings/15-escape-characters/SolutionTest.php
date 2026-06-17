<?php

namespace HexletBasics\Strings\EscapeCharacters;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $expected = "Для разделения строк используйте \"\\n\"\nПример: print_r(\"строка1\\nстрока2\")";
        $this->expectOutputString($expected);
    }
}
