Loops are good not only for processing numbers but also for working with strings — thanks to the ability to retrieve a specific character by its index. Below is some sample code that prints the letters of each word on a separate line:

```php
<?php

function printNameBySymbol(string $name): void
{
    $i = 0;
    // This check runs until the end of the string,
    // including the last character
    // Its index is `string length - 1`
    while ($i < strlen($name)) {
        // Accessing a character by its index
        print_r("$name[$i]\n");
        $i = $i + 1;
    }
}

$name = 'Arya';
printNameBySymbol($name);
// => 'A'
// => 'r'
// => 'y'
// => 'a'
```

The loop goes through each character of the string one by one:

```text
'Arya'
 │ │ │ │
 A r y a
 ↓ ↓ ↓ ↓
each character is processed in turn
```

The most important thing in this code is to set the right condition in `while`. This can be done in two ways at once:

* `$i < strlen($name)`
* `$i <= strlen($name) - 1`

Both ways lead to the same result.

## Reversing a string

Instead of printing, you can build a new string. For example, let's write a function that reverses a string:

```php
<?php

function reverseString(string $text): string
{
    $result = '';
    $i = strlen($text) - 1;

    while ($i >= 0) {
        $result = $result . $text[$i];
        $i = $i - 1;
    }

    return $result;
}

print_r(reverseString('Arya') . "\n");   // => ayrA
print_r(reverseString('hexlet') . "\n"); // => telxeh
```

The `$result` variable is initialized with an empty string as the neutral element for concatenation. The loop starts at the last index (`strlen($text) - 1`), moves toward zero, and ends when the index becomes less than zero. At each step, the current character is added to the result. As a result, the string is built in reverse order.
