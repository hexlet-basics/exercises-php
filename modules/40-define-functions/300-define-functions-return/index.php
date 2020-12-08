<?php

namespace HexletBasics\DefineFunctions\ReturnInstruction;

use function HexletBasics\Functions\getParentFor;

// BEGIN
function getParentNamesTotalLength($child)
{
    $mother = getParentFor($child, 'mother');
    $father = getParentFor($child, 'father');
    return strlen($mother) + strlen($father);
}
// END
