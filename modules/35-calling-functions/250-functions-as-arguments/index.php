<?php

use function HexletBasics\Functions\getParentFor;

// BEGIN
$henryDad = getParentFor('Henry', 'father');
print_r(getParentFor($henryDad, 'mother'));
// END
