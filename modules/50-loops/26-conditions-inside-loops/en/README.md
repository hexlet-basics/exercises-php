
Both the loop body and function body are places where statements are executed. So we can use all the things we've already learned in it, such as conditionals.

Imagine a function that counts how many times a letter appears in a sentence. Here's how it might work:

```php
<?php

countChars('Fear cuts deeper than swords.', 'e'); // 4
// If there are no matches, the result is 0
countChars('Sansa', 'y'); // 0
```

Before examining its contents, answer these questions:

* Is this an aggregation operation?
* What'll be the test condition for whether or not the character occurs?

```php
<?php

function countChars($str, $char)
{
    $i = 0;
    $count = 0;
    while ($i < strlen($str)) {
        if ($str[$i] === $char) {
            // Count only matching characters
            $count = $count + 1;
        }
        // The counter increases in any case
        $i = $i + 1;
    }

    return $count;
}
```

This is an aggregating task. Despite the fact that it doesn't count all the characters, you still have to analyze each character to calculate the amount itself.

A key feature of this loop is the condition inside its body.  The `$count` variable is only incremented when the current character in question is the same as the expected one.

Apart from that, it's a generic aggregation function that returns the number of required characters.
