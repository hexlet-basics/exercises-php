<?php

namespace HexletBasics\Conditionals\ElseIfStatement;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'Solution.php';

        $this->assertEquals('go', getTrafficLightAction('green'));
        $this->assertEquals('slow down', getTrafficLightAction('yellow'));
        $this->assertEquals('stop', getTrafficLightAction('red'));
        $this->assertEquals('unknown', getTrafficLightAction('blue'));
        $this->assertEquals('unknown', getTrafficLightAction('purple'));
    }
}
