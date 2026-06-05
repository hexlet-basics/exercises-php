<?php

namespace HexletBasics\Conditionals\MatchExpression;

// BEGIN
function calculateDeliveryCost(string $country, float $weight): ?int
{
    return match ($country) {
        'canada' => $weight <= 1 ? 600 : 900,
        'usa' => $weight <= 1 ? 800 : 1200,
        'germany' => $weight <= 1 ? 700 : 1000,
        default => null,
    };
}
// END
