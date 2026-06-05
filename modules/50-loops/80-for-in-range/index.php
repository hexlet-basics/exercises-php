<?php

namespace HexletBasics\Loops\ForInRange;

// BEGIN
function fizzbuzz(int $n): string
{
    $result = '';

    foreach (range(1, $n) as $i) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            $word = 'FizzBuzz';
        } elseif ($i % 3 === 0) {
            $word = 'Fizz';
        } elseif ($i % 5 === 0) {
            $word = 'Buzz';
        } else {
            $word = (string) $i;
        }

        if ($result === '') {
            $result = $word;
        } else {
            $result .= " {$word}";
        }
    }

    return $result;
}
// END
