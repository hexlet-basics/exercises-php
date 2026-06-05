
FizzBuzz is one of the most famous interview tasks for beginner programmers. It is given to test the ability to work with loops and conditions. Implement a function `fizzbuzz()` that returns a string with the numbers from 1 to `$n`.

The rules:

- if a number is divisible by 3, it is replaced with the word `Fizz`,
- if a number is divisible by 5 — with the word `Buzz`,
- if it is divisible by both 3 and 5 — with the word `FizzBuzz`.

All elements must be joined with a space.

This task often comes up in programming interviews, so it is useful to know how to solve it.

Function call example:

```php
<?php

fizzbuzz(15);
// '1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz'
```

### Algorithm

1. Declare the neutral element of aggregation (an empty string)
2. Use a loop with the numbers from 1 to `$n`
3. Check each number against the division conditions
4. Add the result of each iteration to the final result using a space
