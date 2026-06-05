<?php

namespace HexletBasics\DefineFunctions\Packages;

// BEGIN
function generatePin(): string
{
    $d1 = rand(0, 9);
    $d2 = rand(0, 9);
    $d3 = rand(0, 9);
    $d4 = rand(0, 9);
    return "{$d1}{$d2}{$d3}{$d4}";
}
// END
