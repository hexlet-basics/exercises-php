
You can use aggregation with strings as well as with numbers. In most cases, this applies to dynamic string generation, where you don't know in advance what size the string will be and what it will contain.

Imagine a function that multiplies a string, i.e., it repeats a string a given number of times:

```php
<?php

repeat('hexlet', 3); // 'hexlethexlethexlet'
```

The core mechanism of this function is simple, the loop increments through the string a given number of times:

```php
<?php

function repeat($text, $times)
{
    // For strings, the neutral element is an empty string
    $result = '';
    $i = 1;

    while ($i <= $times) {
        // Add a string on each iteration
        $result = "{$result}{$text}";
        $i = $i + 1;
    }

    return $result;
}
```

Let's break down down the code's execution into steps:

```php
<?php

// To call repeat('hexlet', 3);
$result = '';
$result = "{$result}hexlet"; // hexlet
$result = "{$result}hexlet"; // hexlethexlet
$result = "{$result}hexlet"; // hexlethexlethexlet
```
