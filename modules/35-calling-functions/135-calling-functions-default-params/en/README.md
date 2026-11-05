Some functions in PHP have **optional parameters**. This means that a default value is set for them in advance, and you can omit such a parameter when calling the function.

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

In the signature of `round()`, the required parameter `$num` comes before the optional `$precision`. Another function may have a different number of parameters and different default values.

## How to read a function's documentation

Documentation describes what data a function accepts and what result it returns. Each function has its own page in the [PHP manual](https://www.php.net/manual/en/). Below is a fragment of the [reference for `round()`](https://www.php.net/manual/en/function.round.php), with part of the text omitted.

```text
Description

round(int|float $num, int $precision = 0, int|RoundingMode $mode = RoundingMode::HalfAwayFromZero): float

Returns the rounded value of num to specified precision
(number of digits after the decimal point).
...

Parameters

num
    The value to round.
precision
    The optional number of decimal digits to round to.
    ...
mode
    ...

Return Values

The value rounded to the given precision as a float.
```

Read the page from top to bottom, step by step.

1. The Description section starts with the signature, which shows the function name, the parameters in order, and the result type.
2. The first sentence briefly says what the function does.
3. The Parameters section explains each parameter by its name from the signature. You can skip long explanations and tables of modes on a first read.
4. The Return Values section describes the result. Here the function returns a `float` even when it rounds to an integer.

The last parameter, `$mode`, controls the rounding mode. It is rarely needed, so we won't consider it for now. Without it, the signature looks like this.

```php
round(int|float $num, int $precision = 0): float
```

The names `$num` and `$precision` stand for parameters. In a call you put concrete values in their place, for example `round(10.25, 1)`. Each name is preceded by the type of value the function expects.

The table matches the parts of the signature to the arguments of this call.

| Part of the signature | What it means | In the call `round(10.25, 1)` |
| --- | --- | --- |
| `round` | Function name | We call `round()` |
| `int\|float $num` | Required parameter, an integer or a fraction to round | We pass `10.25` |
| `int $precision = 0` | Optional parameter, an integer with the default value `0` | We pass `1` instead of the default value |
| `: float` | Result type | We get a fractional number |

The `=` sign in `$precision = 0` marks the default value. This notation tells you the second argument can be omitted. The Parameters section explains how the function uses that `0`. For `round()`, precision `0` means rounding to an integer.

Let's check both cases in the [interactive PHP console](https://psysh.org/). You don't type the `<?php` line in the console, you type the call right away. The `>` sign marks the input line, and the console prints the result under each call after the `=` sign.

```console
> round(10.25, 1)
= 10.3
> round(10.25)
= 10.0
```

The first call passes the precision `1` and gets the number `10.3`. The second leaves `$precision` at its default and gets `10.0`. The console shows the decimal part because the result has the `float` type, as the Return Values section promises. This is how we match the signature, the explanation in the documentation, and the actual result.

## Notation in references

A signature contains auxiliary marks. They help you read the signature and are not passed to the function in a call.

| Notation in the reference | How to read it |
| --- | --- |
| `int $precision = 0` | `$precision` has a default value, the argument can be omitted |
| `int\|float $num` | The parameter accepts a value of any of the listed types |
| `round(float $val [, int $precision = 0])` | This is how some third-party references and articles mark optional arguments. The square brackets are not part of the call |

For example, the notation `int|float $num` describes a single parameter. The call `round(7)` passes it the integer `7` and returns `7.0`. Neither the type, nor the name `$num`, nor the `|` sign go into the call.

If your browser translates the page, check function names, parameter names, and symbols in the signature against the original. Code uses the original names from the documentation.

## Working with an unfamiliar function

Reading a reference starts with a task. For example, to round a price to one decimal place, we find the number and the precision in the signature of `round()`, check what precision means in the parameter list, and then try the call `round(10.25, 1)`. If the result matches the description, the call can go into the program.

Another function will have its own parameters and rules. Its signature tells us which arguments to pass, its description tells us the result and the limits, and a small example lets us check our understanding.
