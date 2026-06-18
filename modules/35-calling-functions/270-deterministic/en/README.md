Functions in any programming language have fundamental properties. These properties help you understand how a function will behave in different situations, how to test it, and where to use it. One of these properties is **determinism**.

![Two people sitting and talking about a deterministic function](./assets/deterministic.png)

A **deterministic function** always returns the same result for the same input data. For example, a function that counts the number of characters can be called deterministic:

```php
<?php

strlen('hexlet'); // 6
strlen('hexlet'); // 6

strlen('wow'); // 3
strlen('wow'); // 3
```

The `strlen()` function can be called endlessly with the same argument, and it will always return the same result.

## Non-deterministic functions

The opposite type is **non-deterministic functions**. They can return different results for the same input data or in the absence of it (functions without parameters). A good example is the `rand()` function, which returns a random number:

```php
<?php

rand(); // 827606195
rand(); // 635369726
```

This function has no arguments, but its result is different every time. If even one call out of millions gives a different result, the function is considered non-deterministic.

```text
Deterministic:              Non-deterministic:
strlen('abc') → always 3    rand() → 827606195
strlen('abc') → always 3    rand() → 635369726
strlen('abc') → always 3    rand() → 142503087
```

## Why this matters

Determinism affects how we work with functions.

- deterministic functions are easy to test and predict;
- they are easier to optimize and reuse;
- non-deterministic functions are harder to check, because the result changes.

That's why, wherever possible, it's better to aim for a function to be deterministic.
