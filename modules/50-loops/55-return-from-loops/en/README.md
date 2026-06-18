Working with loops usually comes down to two scenarios:

1. Aggregation. Accumulating a result over the iterations and working with it after the loop. Reversing a string is exactly this kind of case.
2. Running the loop until the required result is reached and then exiting. For example, the task of finding prime numbers. Recall that a prime number is a number that is divisible without a remainder only by itself and by one.

Let's look at an algorithm for checking whether a number is prime. We'll divide the target number `x` by every number in the range from two to `x - 1` and look at the remainder. If no divisor that divides `x` without a remainder is found in this range, then we have a prime number.

## Checking whether 5 is prime: a step-by-step breakdown

1. Take the number x = 5. We look for possible divisors in the range from 2 to x - 1, that is, from 2 to 4.
2. Divide 5 by 2. The remainder is 1, no divisor found, continue.
3. Divide 5 by 3. The remainder is 2, no divisor found, continue.
4. Divide 5 by 4. The remainder is 1, no divisor found, finish the search.

Result. In the range 2…4 there was no number that divides 5 without a remainder. Therefore, 5 is a prime number.

If you think about it, you can notice that it's enough to check numbers not up to `x - 1`, but up to half the number. For example, 11 isn't divisible by 2, 3, 4, 5. But beyond that it's guaranteed not to be divisible by numbers greater than its half either. So we can make a small optimization and check divisibility only up to `x / 2`:

```php
<?php

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    $divisor = 2;

    while ($divisor <= $number / 2) {
        if ($number % $divisor === 0) {
            return false;
        }

        $divisor += 1;
    }

    return true;
}

var_dump(isPrime(1)); // => bool(false)
var_dump(isPrime(2)); // => bool(true)
var_dump(isPrime(3)); // => bool(true)
var_dump(isPrime(4)); // => bool(false)
```

*To be completely honest, checking numbers up to the square root of `$number` is enough to solve the task, but in our case it's important to focus on understanding how to work with conditions inside a loop.*

```text
while (...) {
    if (condition) {
        return value;  ← exit from the function (and from the loop)
    }
    ...
}
─────────────────────────
Without return the loop continues to the end
```

The algorithm is built in such a way that if, during the sequential division by numbers up to `x / 2`, at least one is found that divides without a remainder, then the passed argument is not a prime number, which means further computations make no sense. This is where `false` is returned.

And only if the loop ran in full can we conclude that the number is prime, since no number was found that divides the number without a remainder.
