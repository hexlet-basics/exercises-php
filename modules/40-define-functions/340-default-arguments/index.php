<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

use function HexletBasics\Functions\getParentFor;

// BEGIN
function getCustomParentFor($child, $parent = 'father')
{
    return getParentFor($child, $parent);
}
// END
