Comparison operations work with numbers and with strings. In PHP, strings are compared lexicographically: character by character, left to right, by the numeric codes of the characters.

```php
<?php

var_dump('apple' < 'banana');  // => bool(true)
var_dump('cat' > 'dog');       // => bool(false)
var_dump('abc' === 'abc');     // => bool(true)
var_dump('hello' !== 'world'); // => bool(true)
```

Here `'apple' < 'banana'` because the code of `a` (97) is less than the code of `b` (98), and it is exactly the first character that decides the outcome of the comparison. You can look up a character code with the `ord()` function:

```php
<?php

print_r(ord('a')); // => 97
print_r(ord('b')); // => 98
```

The comparison is case-sensitive: the code of `'Z'` (90) is less than the code of `'a'` (97). An example of a comparison where the first letters are of different cases:

```php
<?php

var_dump('Zebra' < 'apple');  // => bool(true)  — 'Z'(90) < 'a'(97)
var_dump('apple' < 'Banana'); // => bool(false) — 'a'(97) > 'B'(66)
var_dump('Apple' < 'apple');  // => bool(true)  — 'A'(65) < 'a'(97)
```

Let's write a function that checks whether a word starts with a given letter. To do this, we take the first character of the string and compare it with the desired letter:

```php
<?php

function startsWithLetter(string $word, string $letter): bool
{
    return $word[0] === $letter;
}

var_dump(startsWithLetter('apple', 'a'));  // => bool(true)
var_dump(startsWithLetter('banana', 'a')); // => bool(false)
```

Comparison operations are the same kind of expressions as arithmetic ones. You can substitute ready values and other expressions into them, as in the example above: `$word[0]`. For example, instead of a number you can use the result of the `strlen()` function, which returns the length of a string:

```php
<?php

var_dump(strlen('apple') > 3); // => bool(true), because strlen('apple') is 5
var_dump(strlen('hi') > 3);    // => bool(false), because strlen('hi') is 2
```

In the example above, the function `strlen('apple')` runs first, and its result is the number `5`. Then this number is compared with `3`. In other words, first the arguments of the expression are computed (for example, the length of the string), and then the comparison operation is performed.

This is how you can combine different operations to get more complex checks.

## Useful predicates

PHP has many built-in predicate functions for working with strings. They return `true` or `false` and help check various properties of a string. Below are the most commonly used ones:

```php
<?php

var_dump(str_starts_with('hello', 'he')); // => bool(true) — the string starts with 'he'
var_dump(str_ends_with('hello', 'lo'));   // => bool(true) — the string ends with 'lo'
var_dump(str_contains('hello', 'ell'));   // => bool(true) — the string contains 'ell'
```

Such functions let you check strings against the required conditions right in the code, without writing additional functions.
