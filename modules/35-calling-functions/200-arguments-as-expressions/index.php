<?php

use function HexletBasics\Functions\calculateDistanceFromTirion;

$from = 'The Twins';
$to = 'The Eyrie';

// BEGIN
$distance = calculateDistanceFromTirion("{$from}-{$to}");
print_r($distance);
// END
