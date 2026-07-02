**Logical operations** are expressions, so they can be combined with other expressions. For example, let's say we want to check whether a number is even, that is, whether it's a multiple of two. In programming, to do this we check the remainder of the division by two. If the remainder is `0`, the number is even. If the remainder is not `0`, the number is odd.

The remainder of a division is a simple but important concept in arithmetic, algebra, number theory, and cryptography. You divide a number into several equal groups, and if anything is left at the end, that is the remainder of the division.

Splitting candies equally among people:

* 7 candies, 2 people: 2 x 3 + remainder 1 (7 is not a multiple of 2)
* 21 candies, 3 people: 3 x 7 + remainder 0 (21 is a multiple of 3)
* 19 candies, 5 people: 5 x 3 + remainder 4 (19 is not a multiple of 5)

The `%` operator calculates the remainder of a division:

* `7 % 2` → `1`
* `21 % 3` → `0`
* `19 % 5` → `4`

Let's combine the logical operator "equality check" `===` and the arithmetic operator `%` in a single expression and write a function that checks whether a number is even:

```php
<?php

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

var_dump(isEven(10)); // => bool(true)
var_dump(isEven(3));  // => bool(false)
```

Arithmetic operations have a higher priority than logical ones. That means the arithmetic expression `$number % 2` is calculated first, and then the result is compared with zero, and the result of the equality check is returned.

Now let's write a function that takes a string and checks whether this string starts with the Latin letter `a`.

Algorithm:

1. Get the first character of the argument string and store it in a variable
2. Compare whether the character is equal to the Latin letter `a`
3. Return the result

```php
<?php

function isFirstLetterAnA(string $text): bool
{
    $firstLetter = $text[0];
    return $firstLetter === 'a';
}

var_dump(isFirstLetterAnA('orange')); // => bool(false)
var_dump(isFirstLetterAnA('apple'));  // => bool(true)
```

To make it clear what's happening here, try to say out loud what's going on, just like we decoded the process in the `isEven()` example.

Now you know that comparison operations are used in programming on a par with arithmetic ones. But remember that equality is denoted by `===`. That way you won't confuse this operation with assigning a value to a variable.
