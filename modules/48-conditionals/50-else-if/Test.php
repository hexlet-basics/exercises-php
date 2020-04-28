<?php

namespace HexletBasics\Logic\ElseIfStatement;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test()
    {
        assert(whoIsThisHouseToStarks('Tully') === 'friend');
        assert(whoIsThisHouseToStarks('Karstark') === 'friend');
        assert(whoIsThisHouseToStarks('Lannister') === 'enemy');
        assert(whoIsThisHouseToStarks('Martell') === 'neutral');
        assert(whoIsThisHouseToStarks('undefined') === 'neutral');
    }
}
