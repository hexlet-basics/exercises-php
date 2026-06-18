Aggregation applies not only to numbers but also to strings. These are tasks in which a string is formed dynamically — that is, you don't know in advance what size it will be or what it will contain.

Imagine a function that can multiply a string, that is, repeat it a specified number of times:

```php
<?php

repeat('hexlet', 3); // 'hexlethexlethexlet'
```

The principle behind this function is quite simple — in a loop, the string is "built up" the specified number of times:

```php
<?php

function repeat(string $text, int $times): string
{
    // The neutral element for strings is an empty string
    $result = '';
    $i = 1;

    while ($i <= $times) {
        // Each time we add the string to the result
        $result = "{$result}{$text}";
        $i = $i + 1;
    }

    return $result;
}
```

Let's break down the execution of this code step by step:

```php
<?php

// To call repeat('hexlet', 3);
$result = '';
$result = "{$result}hexlet"; // hexlet
$result = "{$result}hexlet"; // hexlethexlet
$result = "{$result}hexlet"; // hexlethexlethexlet
```

Visually, the process of building up the string looks like this:

```text
repeat('hexlet', 3):

i=1: result = ''             . 'hexlet' = 'hexlet'
i=2: result = 'hexlet'       . 'hexlet' = 'hexlethexlet'
i=3: result = 'hexlethexlet' . 'hexlet' = 'hexlethexlethexlet'
                                            └── result
```

## Neutral element

For the building up to work, you need a starting value. For strings, this value is the **empty string** `''`.

It is called the neutral element because it changes nothing during concatenation:

```php
<?php

print_r('' . 'abc');  // => abc
print_r('abc' . '');  // => abc
```

That is why the empty string is always used as the initial value when aggregating strings.
