<?php

use function HexletBasics\Functions\getParentFor;

// BEGIN
$joffreyMom = getParentFor('Joffrey Baratheon');
print_r(getParentFor($joffreyMom, 'father'));
// END
