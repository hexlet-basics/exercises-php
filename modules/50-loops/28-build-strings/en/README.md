
Loops also allow you to generate strings. This is a common task for web development. It's merely basic aggregation using interpolation or concatenation.

One especially popular task among interviewers is to do a string reversal. There are lots of ways to solve it, but the most basic is by iterating each character. Have a look at how this function works:

```php
<?php

reverse('Hexlet'); // telxeH
```

The general idea of a string reversal is that you take characters one by one from the beginning of the string and then connect them together in reverse order. Sounds like a piece of cake. Now let's examine it:

```php
<?php

function reverse($str)
{
    $i = 0;
    // A neutral element in terms of strings is an empty string
    $result = '';

    while ($i < strlen($str)) {
        $currentChar = $str[$i];
        // Join it together it in reverse order
        $result = "{$currentChar}{$result}";
        // The same through concatenation
        // $result = $currentChar . $result;
        $i = $i + 1;
    }

    return $result;
}

$name = 'Bran';
reverse($name); // 'narB'
// Neutral element check
reverse(''); // ''
```

https://replit.com/@hexlet/php-basics-loops-using-reverse

Perhaps the only tricky part here is getting a feel of how the string itself is built. Since each next character is attached to the resulting string on the left, the string ends up reversed.
