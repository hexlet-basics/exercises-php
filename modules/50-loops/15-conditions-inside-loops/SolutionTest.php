<?php

namespace HexletBasics\Loops\ConditionsInsideLoops;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $this->assertEquals(2, countHashtags('New post #php #code'));
        $this->assertEquals(0, countHashtags('No tags here'));
        $this->assertEquals(2, countHashtags('#start and #finish'));
        $this->assertEquals(0, countHashtags(''));
    }
}
