<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

// BEGIN
function getHiddenCard($cardNumber, $starsCount = 4)
{
    $visibleDigitsLine = substr($cardNumber, 12);
    return str_repeat('*', $starsCount) . $visibleDigitsLine;
}
// END
