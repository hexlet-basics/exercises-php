In math and programming, we often use operation signs such as `+`, `-`, `*`, and others. In programming, such signs are called operators.

- An operator is a symbol or word that denotes an action.
- Operands are the values to which the operator is applied.

Example:

```php
<?php

print_r(8 + 2);
```

Here:

- `+` is an operator
- `8` and `2` are operands
- the result is `10`

```text
operand   operator   operand       result
    8         +          2       →      10
    5         -          3       →      2
    4         *          3       →      12
```

Operations that require two operands are called **binary**. In the case of addition, we have two operands: one to the left of the `+` sign and one to the right. If at least one operand is omitted, for example, `3 + ;`, the program will end with a syntax error.

## Unary operators

There are also unary operations that work with a single operand. Example:

```php
<?php

print_r(-3); // => -3
```

In this case, `-` is a unary operator, and `3` is an operand. The interpreter receives the command: "take the number 3 and change its sign".

The `-` operator can be used in different ways. When it stands **between two numbers**, it is a subtraction operation:

```php
<?php

print_r(5 - 2);  // => 3
print_r(10 - 7); // => 3
```

Here `-` takes the first number and subtracts the second from it.

This difference is especially noticeable when working with negative numbers. For example:

```php
<?php

// minus times minus gives plus
print_r(5 - -2); // => 7
```

First, we see a subtraction operation: `5 - (...)`. But on the right is a unary minus `-2`, which turns `2` into a negative number. As a result, we get: `5 - (-2) = 7`.

Thus, the meaning of `-` depends on the context: if there is another number next to it, it is subtraction; otherwise, it is changing the sign of a number.

The same applies to the plus:

```php
<?php

print_r(+3);     // => 3
print_r(1 + +3); // => 4
```

The main thing to remember here is that the behavior and even the notation itself fully correspond to how we did this in school.

## Errors in calculations and parsing

If you treat `-3` as a single number, you might not notice that `-` is a separate operator with its own precedence. For example:

```php
<?php

print_r(-3 ** 2);
```

At first glance, it might seem that `-3` is being squared, and the result should be `9` (any number squared becomes positive). But the result will be `-9`.

The reason is the order of calculations: first, exponentiation (`**`) is performed, and only then the unary minus is applied. That is, the program computes it like this: `-(3 ** 2) = -9`. We will talk about operator precedence in more detail later in the course.
