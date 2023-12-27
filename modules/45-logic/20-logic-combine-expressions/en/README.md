
Logical operations are expressions. So, **you can combine them with other expressions**.

Let's say, for example, we want to check if a number is even. In programming, we do this:

* check the remainder of a division by 2:
  * if the remainder is 0, then the number was even
  * if the remainder is not 0, then the number was odd

The remainder of a division is an elementary but crucial concept in arithmetic and algebra, and even number theory and cryptography. The idea is simple; divide a number into several equal groups, and if anything remains, it's the remainder of the division.

Split some candies equally among individuals:

- 7 candies, 2 people: 2 x 3 + **remainder 1**.
  So, 7 is not a multiple of 2.
- 21 candies, 3 people: 3 x 7 + **remainder 0**.
  So, 21 is a multiple of 3.
- 19 candies, 5 people: 5 x 3 + **remainder 4**.
  So, 19 is not a multiple of 5.

The `%` operator calculates the remainder of a division (not to be confused with division itself):

- `7 % 2` → `1`
- `21 % 3` → `0`
- `19 % 5` → `4`

```php
<?php

7 % 2;  // 1
21 % 3; // 0
19 % 5; // 4

// Even/odd check

10 % 2 // 10 is even, because the remainder is 0
9 % 2  // 9 is odd, because the remainder is 1
```

Write a function to check whether a number is even:

```php
<?php

function isEven($number)
{
    return $number % 2 === 0;
}

isEven(10); // true
isEven(3);  // false
```

In one expression, we combined the logical operator `===` (equality check) and the arithmetic operator `%`.

Arithmetic operators have higher priority than logical ones. So first the arithmetic expression `$number % 2` is calculated, then the result is involved in a logical comparison.

We can express this in normal words like so: *«calculate the remainder from dividing the number `$number` by 2 and compare whether the remainder is zero; then return the result of the even/odd check»*.

---

Another example is to write a function to check if the first letter of a string is uppercase.

Algorithm:

1. Let's get the first character of the argument string and write it to a variable.
1. We'll compare whether the symbol is equal to its large (capital) version.
1. Let's get the result back.

```php
<?php

function isFirstLetterInUpperCase($string)
{
    $firstLetter = $string[0];
    $isSame = strtoupper($firstLetter) === $firstLetter;
    return $isSame;
}

isFirstLetterInUpperCase('marmont'); // false
isFirstLetterInUpperCase('Robb'); // true
```

We used the [`strtoupper()` function  from the standard PHP library.](https://www.php.net/manual/en/function.strtoupper.php). It takes the string and returns a version of the string in which all the letters have been capitalized. We pass it just one character, the first character of the string.

Try and explain what's happening in simple English, similar to how we decoded the process in the `isEven()` example at the beginning of the lesson.

---

*Do you remember how we extract characters from a string with square brackets?*

```php
<?php

$firstName = 'Alexander';

$firstName[0]; // A
```
