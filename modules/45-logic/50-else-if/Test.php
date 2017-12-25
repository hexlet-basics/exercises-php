<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(whoIsThisHouseForStarks('tally'))->eq('friend');
Assert::that(whoIsThisHouseForStarks('karstark'))->eq('friend');
Assert::that(whoIsThisHouseForStarks('lannister'))->eq('enemy');
Assert::that(whoIsThisHouseForStarks('martell'))->eq('neutral');
Assert::that(whoIsThisHouseForStarks('undefined'))->eq('neutral');
