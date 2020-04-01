<?php

namespace HexletBasics;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;
use function HexletBasics\Tests\test;

test(function () {
  Assert::eq(whoIsThisHouseToStarks('Tully'), 'friend');
  Assert::eq(whoIsThisHouseToStarks('Karstark'), 'friend');
  Assert::eq(whoIsThisHouseToStarks('Lannister'), 'enemy');
  Assert::eq(whoIsThisHouseToStarks('Martell'), 'neutral');
  Assert::eq(whoIsThisHouseToStarks('undefined'), 'neutral');
});
