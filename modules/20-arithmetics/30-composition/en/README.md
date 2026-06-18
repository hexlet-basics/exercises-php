In PHP, just like in math, you can combine several operations into a single line. The interpreter processes such expressions step by step, following certain rules. This property of operations is called **composition**.

Let's look at an example:

```php
<?php

print_r(2 * 4 * 5 * 10);
```

This code consists of several multiplication operations combined into a single expression. To understand how the interpreter evaluates the expression, let's break it down step by step:

- First, `2 * 4` is calculated: `8 * 5 * 10`
- Then `8 * 5`: `40 * 10`
- And finally `40 * 10`: `400`

The final result is `400`.

## What about different operations?

It's all simple as long as you use the same operators. But what happens if you combine, for example, multiplication and addition?

```php
<?php

print_r(2 + 3 * 4);
```

```text
2 + 3 * 4
    └─┬─┘
2 +  12
└──┬───┘
   14
```

Will the result be `20` or `14`? The answer is `14`.

This is because in PHP, just like in math, operations have precedence. Multiplication is performed before addition unless you use parentheses. We'll cover this in more detail in the lesson about precedence.

## Examples with subtraction and negative numbers

The same rule applies to subtraction:

```php
<?php

print_r(10 - 2 * 3); // => 4
```

First, the multiplication is performed: `10 - 6 = 4`.

If an expression contains negative numbers, the unary minus is applied after exponentiation:

```php
<?php

print_r(-2 ** 2); // => -4, two to the power of two, then the minus is applied
print_r(-2 * 5);  // => -10, minus two multiplied by five
print_r(4 + -2);  // => 2
print_r(6 - -2);  // => 8
```

In all examples except the first one, the unary minus (`-2`) is calculated first, and then the remaining operations are performed.

Let's take a closer look at the last example:

```php
<?php

print_r(6 - -2); // => 8
```

First, the unary minus (`-2`) is calculated, and then the operation turns into `6 - (-2)`, which gives `8`. This is the same as:

```php
<?php

print_r(6 + 2); // => 8
```

## What to remember

- Expressions can consist of several operations.
- PHP evaluates them step by step: from left to right, respecting the precedence of operations.
- Parentheses can be used to explicitly specify the order of evaluation.
