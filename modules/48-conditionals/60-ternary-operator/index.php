<?php

namespace HexletBasics\Logic\TernaryOperator;

// BEGIN
function convertText($string)
{
    return $string[0] === strtoupper($string[0]) ? $string : strrev($string);
}
// END
