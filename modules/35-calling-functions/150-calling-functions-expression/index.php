<?php

$text = 'Hello, PHP!';

// BEGIN
$result = "First: {$text[0]}\nLast: {$text[strlen($text) - 1]}";
print_r($result);
// END
