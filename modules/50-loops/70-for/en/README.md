
A `while` loop works perfectly for situations where the number of iterations isn't known in advance, e.g., finding a prime number. When we do know the number of iterations, it's better to use a `for` loop.

Let's have a look at a function that reverses strings using a `for` loop:

```php
<?php

function reverseString($str)
{
    $result = '';

    for ($i = 0; $i < strlen($str); $i += 1) {
        $currentChar = $str[$i];
        $result = "{$currentChar}{$result}";
    }

    return $result;
}
```


You can read it like this: *«the loop with index `$i` repeats until `$i < strlen($str)` and after each step increases `$i` by 1»*.

1. The initial counter value. This code runs exactly once before the first iteration.
2. Predicate condition to decide when cycle repeats. It's executed on each iteration. This is exactly what we have with `while`
3. Description of the counter change. This code is executed at the end of each iteration.

Other than that, it works exactly the same as a `while` loop.
