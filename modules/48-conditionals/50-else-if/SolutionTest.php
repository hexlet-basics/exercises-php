<?php

namespace HexletBasics\Conditionals\ElseIfStatement;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals('friend', whoIsThisHouseToStarks('Tully'));
        $this->assertEquals('friend', whoIsThisHouseToStarks('Karstark'));
        $this->assertEquals('enemy', whoIsThisHouseToStarks('Lannister'));
        $this->assertEquals('neutral', whoIsThisHouseToStarks('Martell'));
        $this->assertEquals('neutral', whoIsThisHouseToStarks('undefined'));
    }
}
