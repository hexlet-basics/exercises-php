<?php

namespace HexletBasics\Loops\ConditionsInsideLoops;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'Solution.php';

        $this->assertEquals(2, countHashtags('New post #php #code'));
        $this->assertEquals(0, countHashtags('No tags here'));
        $this->assertEquals(2, countHashtags('#start and #finish'));
        $this->assertEquals(0, countHashtags(''));
    }
}
