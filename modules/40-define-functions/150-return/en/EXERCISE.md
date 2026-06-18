Implement a function `truncate()` that cuts the given string down to the specified number of characters, adds an ellipsis at the end, and returns the resulting string. Logic like this is often used on websites to display long text in a shortened form.

The function takes two parameters:

1. The string to be cut
2. The number of characters to keep

An example of how the function you write should work:

```php
<?php

// Passing the text directly
// Cut the text, keeping 2 characters
truncate('hexlet', 2); // 'he...'

// Through a variable
$text = 'it works!';
// Cut the text, keeping 4 characters
truncate($text, 4); // 'it w...'
```

You can complete the task in various ways, we will only suggest one of them. To solve it this way, you will need to take a substring from the string passed as the first parameter to the function. Use the [substr()](https://www.php.net/manual/en/function.substr.php) function for this. Based on the task, think about which index and what length you need to extract the substring from?

```php
<?php

$word = 'welcome!';
$length = 3;
substr($word, 0, $length); // 'wel'
```

From the checking system's point of view, it does not matter which of the ways the `truncate()` function is implemented internally. The main thing is that it performs the assigned task.
