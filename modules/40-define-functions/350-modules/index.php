<?php

namespace HexletBasics\DefineFunctions\Modules;

function amountPerPerson(float $total, int $people, int $tipPercent): int
{
    // BEGIN
    $withTip = $total * (1 + $tipPercent / 100);
    return (int) ceil($withTip / $people);
    // END
}
