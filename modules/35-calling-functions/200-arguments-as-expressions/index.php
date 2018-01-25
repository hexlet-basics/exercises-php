<?php

use function HexletBasics\Functions\calculateDistanceByTirion;

$from = 'The Twins';
$to = 'The Eyrie';

// BEGIN
$distance = calculateDistanceByTirion("{$from}-{$to}");
print_r($distance);
// END
