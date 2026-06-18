When calling a function, arguments can be passed in two ways. In a **positional call**, the values go strictly in order. The first goes into the first parameter, the second into the second. **Named arguments** appeared in PHP 8 and let you explicitly specify the parameter name when calling. This is convenient when a function has many parameters and you need to override only some of them. The rest keep their default values.

```php
<?php

function repeat($text, $times)
{
    return str_repeat($text, $times);
}

repeat('Hi', 3);              // positional call
repeat(text: 'Hi', times: 3); // named call
```

Internally it uses the built-in function `str_repeat()` — it repeats a string a given number of times, so `repeat('Hi', 3)` returns `HiHiHi`.

Both call variants do the same thing. In the second case, we explicitly wrote that `'Hi'` is the value of `$text`, and `3` is the value of `$times`. The parameter name is given without the `$` sign, and a colon follows the name. From the point of view of the function definition, nothing has changed. Named arguments work for any function, and the function itself knows nothing about it. It receives the values as they are described in the definition.

```text
function truncate($text, $length) { ... }

Positional:  truncate('hello', 3)
                      └──┬──┘  └┬┘
                      $text   $length

Named:       truncate(length: 3, text: 'hello')
                      └───┬───┘  └─────┬─────┘
                      $length        $text
```

Named arguments can be specified in any order. This does not change the result of the function, because the values are bound exactly by the parameter name:

```php
<?php

repeat(times: 3, text: 'Hi'); // => HiHiHi
```

Named arguments can be combined with positional ones, and in that case the positional ones come first. Such a call lets you specify only the parameters you need to override:

```php
<?php

repeat('Hi', times: 3); // positional + named => HiHiHi
```

## When to use named arguments

Named arguments are useful when a function has several parameters and not all of them need to be changed. In such cases, you can specify only the parameters that matter for a particular call, and leave the rest with their default values.

You already know that the built-in function `round()` has an optional second parameter. In a named call, the parameter names from the signature in the documentation are used — `round(int|float $num, int $precision = 0)`:

```php
<?php

round(10.252, 1);                 // 10.3
round(num: 10.252, precision: 1); // 10.3 — the same thing, but clearer
```

The power of named arguments shows when there are several optional parameters. Let's look at the built-in function `number_format()`, which formats a number. Its simplified signature looks like this:

```php
number_format(
    float $num,
    int $decimals = 0,
    string $decimal_separator = '.',
    string $thousands_separator = ','
)
```

Suppose we want to change only the thousands separator, while leaving the precision and the decimal separator at their defaults:

```php
<?php

// Without named arguments you have to explicitly repeat
// the values of all the parameters that come before it
number_format(1234.567, 0, '.', ' ');              // => 1 235

// With named ones — we specify only the one we need
number_format(1234.567, thousands_separator: ' '); // => 1 235
```

Specifying the separator became simpler, even though two more parameters come before it in the parameter list. Named arguments make calls clearer. When reading the code, you immediately see which value relates to which parameter.
