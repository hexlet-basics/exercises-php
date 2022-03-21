<?php

namespace HexletBasics\DefineFunctions\ReturnInstruction;

// BEGIN
function getCurrentYear()
{
    $now = date('Y-m-d');
    return substr($now, 0, 4);
}
// END
