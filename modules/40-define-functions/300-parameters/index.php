<?php

namespace HexletBasics\DefineFunctions\Parameters;

// BEGIN
function truncate($str, $length)
{
    $cuttedString = substr($str, 0, $length);
    return "{$cuttedString}...";
}

// END
