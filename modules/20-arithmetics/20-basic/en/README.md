At the most basic level, computers only work with numbers. Even if you write a complex application in a modern programming language, numerous calculations are always happening inside it: addition, subtraction, division, and so on.

![Counting sticks](./assets/arithmetics.png)

Fortunately, to start programming, knowing ordinary school arithmetic is enough. That's where we'll begin.

## Addition in PHP

In math, to add we write 3 + 4. In PHP it's exactly the same:

```php
<?php

// Don't forget the semicolon at the end, because every line in the code is a statement
3 + 4;
```

This code can actually be run: the interpreter will perform the calculation. But... it won't do anything with the result. That is, 7 will be produced, but you won't see it.

## To see the result, you need to output it

In a real program, just calculating a value is not enough. You need to do something with the result, for example, show it to the user. When building an online store, it's not enough to ask the interpreter to calculate the cost of the goods in the cart — you need to calculate the cost and show the price to the buyer.

To do this, we use the already familiar command `print_r()`, which from now on we'll call a function:

```php
<?php

print_r(3 + 4);
```

Here the sum is calculated first, then it is passed to the print function.

```text
print_r(3 + 4)
        └─┬─┘
          7

print_r(7)  →  7
```

The result of execution:

```text
7
```

If you write this same expression as a string, you'll get a completely different result — the string will be printed «as is»:

```php
<?php

print_r('3 + 4'); // outputs: 3 + 4
print_r(3 + 4);   // outputs: 7
```

## Other arithmetic operations

PHP supports all the usual operations + a few specific ones, related to how numbers are stored and processed on a computer:

| Operation              | Symbol | Example      | Result    |
|------------------------|--------|--------------|-----------|
| Addition               | `+`    | `2 + 3`      | `5`       |
| Subtraction            | `-`    | `7 - 2`      | `5`       |
| Multiplication         | `*`    | `4 * 3`      | `12`      |
| Division               | `/`    | `8 / 2`      | `4`       |
| Exponentiation         | `**`   | `3 ** 2`     | `9`       |
| Integer division       | `intdiv()` | `intdiv(7, 3)` | `2`   |
| Remainder              | `%`    | `7 % 3`      | `1`       |

These operation signs are called operators. Here's how you can output the result of division and exponentiation:

```php
<?php

print_r(8 / 2);  // => 4
print_r(3 ** 2); // => 9
```

## Floating-point numbers

In addition to integers, PHP has floating-point numbers, which are used for working with fractions. Such numbers are written with a dot:

```php
<?php

print_r(3.5 + 1.2); // => 4.7
print_r(10 / 4);    // => 2.5
```

Sometimes we use them ourselves, when we need to work specifically with fractional values, for example when calculating an average or when working with money and measurements. But floating-point numbers can also appear on their own, for example, as a result of the division operation `/`:

```php
<?php

print_r(8 / 2); // => 4
print_r(7 / 2); // => 3.5
```

If the result of division turns out to be whole, PHP keeps it as an integer, while a fractional result automatically becomes a floating-point number.

The reason for separating this into a distinct type: the computer needs to store whole values and fractional values differently. For whole ones it allocates some memory structures, for fractional ones it allocates others. That's why in PHP, as in other programming languages, there are two different kinds of numbers: int (integers) and float (floating-point).

At a basic level, it's enough to remember: integers are needed when there are no fractions, and floating-point numbers are needed when there are fractions. We'll explore them in more detail later in the course.

## What is the remainder (`%`)

This operation is called **taking the remainder of division**. It shows **what "remains"** when one number is divided by another *not completely*. Example:

```php
<?php

print_r(7 % 3); // => 1
```

Why is the result equal to 1?

- 7 is divided by 3 twice: 3 * 2 = 6
- Up to 7 there remains 1, and this is the remainder.

Other examples:

```php
<?php

print_r(10 % 4); // => 2 (10 is divided by 4 twice: 4 * 2 = 8, remainder 2)
print_r(15 % 5); // => 0 (divides without a remainder)
```

The % operation is often used in programming, for example:

- to check whether a number divides evenly (if the remainder is 0)
- to perform cyclic actions, for example, behavior based on even/odd indexes

We'll encounter % many more times in tasks and examine its use in practice.

## Formatting arithmetic expressions

From PHP's point of view, there's no difference between `3+4` and `3 + 4`. The interpreter understands both variants the same way and in both cases performs the addition. The difference is only in the code formatting. In programming, it's customary to put spaces around arithmetic operators, because that makes expressions easier to read:

```php
<?php

3 + 4;
8 / 2;
7 % 3;
```

The variant without spaces also works:

```php
<?php

3+4;
8/2;
7%3;
```

But such code looks less tidy and is harder to perceive quickly. So it's better to get used to writing with spaces around operators right away.
