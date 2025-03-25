
Implement a function, `truncate()`, which trims a string passed to the function to a specified number of characters, adds a dash at the end, and returns the resulting string. This kind of logic is often used on websites to display long text in short form. The function takes two parameters:

1. The string that needs to be trimmed
2. The number of characters to keep.

```php
<?php

// Passing text directly
// Trim the text, leaving 2 characters
truncate('hexlet', 2)  // 'he...'

// Through a variable
$text = 'it works!'
// Trim the text, leaving 4 characters
$result = truncate($text, 4);
print_r($result); // => 'it w...'
```

This function can be implemented in different ways, we'll tell you just one of them. To do it this way, you need to take a substring from the string passed as the first parameter to the `truncate()` function. Use the [substr()](https://www.php.net/manual/en/function.substr.php)  function to do this. Think, based on the assignment, which index should you extract the substring from, and how long should it be?

  ```php
  <?php

  $word = 'welcome';
  // You can pass parameters to the function via variables
  $length = 3;
  substr($word, 0, $length); // 'wel'
  ```

From the point of view of the testing system, it doesn't matter which way the `truncate()` function is implemented internally, as long as it performs the task at hand
