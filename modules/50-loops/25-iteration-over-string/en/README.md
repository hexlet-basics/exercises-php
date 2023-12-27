
You can use loops to process strings as well as numbers. Mainly as a way to retrieve a specific character by its index. Below is some sample code that prints the letters of each word on a different line:

```php
<?php

function printNameBySymbol($name)
{
    $i = 0;
    // This check will be performed until the end of the string
    // including the last character. Its index is `line length - 1`.
    while ($i < strlen($name)) {
        // Getting a character by its index
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

https://replit.com/@hexlet/php-basics-loops-using-printnamebysymbol

The main thing in this code is to set the right condition in `while`. This can be done in two ways: `$i < strlen($name)` or `$i <= strlen($name) - 1`. Both lead to the same result.
