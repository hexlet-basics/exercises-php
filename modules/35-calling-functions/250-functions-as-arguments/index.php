<?php

use function HexletBasics\Functions\parentFor;

// BEGIN
$grandfather = parentFor(parentFor('Joffrey Baratheon'), 'father');
print_r($grandfather);
// END
