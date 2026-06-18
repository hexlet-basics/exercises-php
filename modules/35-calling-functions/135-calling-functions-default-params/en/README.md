Some functions in PHP have **optional parameters**. This means that a default value is set for them in advance, and you can omit such a parameter when calling the function.

![Car service](./assets/default-parameters.png)

Let's look at the built-in `round()` function, which rounds a number:

```php
<?php

$result = round(10.25, 0); // 10
```

We passed two values to it:

- The number that needs to be rounded.
- The rounding precision; `0` means that the number will be rounded to an integer.

Since most often you need exactly rounding to an integer, the creators of the `round()` function made the second parameter optional and gave it the default value `0`. That's why the result will be the same even if you don't specify the second parameter:

```php
<?php

$result = round(10.25); // 10
```

If you need a different precision, you can specify it explicitly:

```php
<?php

// rounding to one decimal place
$result = round(10.25, 1); // 10.3
```

```text
round(10.25, 1)  →  arguments: 10.25, 1    →  10.3
round(10.25)     →  arguments: 10.25, (0)  →  10
                                       └── default value
```

The number of optional parameters depends on the specific function, but required ones always come before optional ones.

## A function's signature

Every function has a **signature** that contains a description of its name, its parameters, and the order in which they are used. The signature helps you understand what data the function expects and what will happen if the parameters are not specified.

Let's look at the [documentation](https://www.php.net/manual/en/function.round.php) for the `round()` function. If we simplify it a little, the signature looks like this:

```php
round(int|float $num, int $precision = 0): float
```

The function is called `round`. The `$num` parameter is required — it takes the number to round (an integer or a fraction). The `$precision` parameter has the default value `0`, that is, it is optional; if you don't specify it, the number will be rounded to an integer. After the colon comes the type of the result — the function returns a fractional number (`float`).

The full signature from the documentation has one more optional parameter that controls the rounding mode. It is rarely needed, so we won't consider it for now.

## How to work with new functions

When you come across a new function, you can use a simple pattern:

1. Open the documentation and find the function's signature.
2. Look at usage examples.
3. Go to the interactive PHP shell (it is launched with the `php -a` command) and try calling the function with different arguments.

This approach helps you quickly figure out how exactly a function works, which of its parameters are required and which are optional, and what results it returns.
