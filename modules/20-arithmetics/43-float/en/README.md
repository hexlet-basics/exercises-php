In mathematics there are different types of numbers. For example:

- Natural numbers: positive integers: 1, 2, 3, and so on.
- Rational numbers: fractional numbers that can be represented as a division, for example: 0.5, 1.75, 3.14.

From the point of view of mathematics, everything is simple. But from the computer's point of view, there is a real chasm between these types of numbers. Try to solve mentally: what is `0.2` + `0.1`? Obviously, `0.3`. PHP will show the same when printing:

```php
<?php

print_r(0.1 + 0.2); // => 0.3
```

Everything seems fine. But let's check: subtract 0.3 from this sum. Mathematically, the result should be exactly zero. Here is what PHP says:

```php
<?php

print_r(0.1 + 0.2 - 0.3); // => 5.5511151231258E-17
```

Instead of zero, we get a tiny "tail" — a number in exponential notation, approximately equal to 0.000000000000000055. The thing is that internally PHP stores not exactly 0.3, but an approximation of 0.30000000000000004. When printing, the number is rounded to 14 significant digits, so the error is not visible. But it does not disappear from the calculations themselves.

```text
Expectation: 0.1 + 0.2        →  0.3
Reality:     0.1 + 0.2        →  0.30000000000000004
                                    └── storage error
Check:       0.1 + 0.2 - 0.3  →  5.5511151231258E-17 (not 0)
```

## Why does this happen?

This behavior is typical for Python, JavaScript, and most other programming languages.

The reason lies in how computers work. A computer operates with limited memory, while rational numbers are infinitely precise. Infinitely many other numbers can fit between 0.1 and 0.2. But a computer cannot store infinity. It approximates the number, trying to fit it into the available number of bits.

Such approximate values are called floating point numbers. Their storage and calculations follow strict rules described in a special standard, IEEE 754, which most programming languages rely on.

## When such numbers appear

Floating point numbers appear in programs more often than it may seem. Here are the main cases:

- When you explicitly write a fractional number, for example 0.1, 2.5, 3.14.
- When you perform division with a fractional result:

```php
<?php

print_r(1 / 2); // => 0.5
print_r(2 / 3); // => 0.66666666666667
```

Even if the result looks "nice", internally it is still represented as an approximate value. Some fractions, such as 1 / 3, cannot be exactly represented in the binary system at all, so their precision is always limited.

## Where it is critical and how to deal with it

Usually a small error does not interfere. But in financial calculations, scientific and engineering tasks, as well as in exact comparison of results, it can become a problem. For example, an error of a fraction of a cent can produce an incorrect final amount, and a long chain of calculations can gradually accumulate inaccuracy.

In real programs, this is handled in different ways. Money is often stored in minimal units, such as cents, that is, integers are used instead of fractions. In other cases, the result is rounded to the required number of digits, numbers are compared with an acceptable error margin, or special data types and libraries for exact calculations are used.

## What to remember

Operations with floating point numbers are not always exact, and this is normal. This behavior is typical for most programming languages and is explained by the design of computer memory. PHP rounds numbers when printing, so the error is not always visible on the screen — but it is present in the calculations. Precision can be controlled, for example, by rounding or comparing numbers with a given error margin. When working with money, precise measurements, or scientific calculations, it is better to use special data types that provide control over precision.
