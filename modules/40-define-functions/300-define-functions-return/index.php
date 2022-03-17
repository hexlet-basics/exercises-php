<?php

namespace HexletBasics\DefineFunctions\ReturnInstruction;

// BEGIN
function getCurrentYear()
{
    $now = new \DateTime();
    return substr($now->format("Y-m-d"), 0, 4);
}
// END
