<?php

use function HexletBasics\Functions\getParentFor;

// BEGIN
print_r(getParentFor(getParentFor('Joffrey Baratheon'), 'father'));
// END
