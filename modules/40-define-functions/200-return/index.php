<?php

namespace HexletBasics\DefineFunctions\ReturnInstruction;

// BEGIN
function truncate($text, $length)
{
    $cuttedString = substr($text, 0, $length);
    return "{$cuttedString}...";
}
// END
