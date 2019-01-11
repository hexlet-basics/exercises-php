<?php

namespace HexletBasics;

require __DIR__ . '/../../../vendor/autoload.php';

use Assert\Assert;

$path = __DIR__ . '/index.php';
require $path;

Assert::that(whoIsThisHouseToStarks('Tully'))->eq('friend');
Assert::that(whoIsThisHouseToStarks('Karstark'))->eq('friend');
Assert::that(whoIsThisHouseToStarks('Lannister'))->eq('enemy');
Assert::that(whoIsThisHouseToStarks('Martell'))->eq('neutral');
Assert::that(whoIsThisHouseToStarks('undefined'))->eq('neutral');
