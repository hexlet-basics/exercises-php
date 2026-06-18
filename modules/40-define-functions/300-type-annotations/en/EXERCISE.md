The application creates text separators from repeated characters — for example, `-------` or `=====`. Implement the function `wordMultiply()`. It should accept two parameters:

* A string
* A number that indicates how many times the string should be repeated

And it returns a string that is repeated n times. If zero is passed, an empty string is returned.

```php
<?php

$text = 'php';
print_r(wordMultiply($text, 2)); // => phpphp
print_r(wordMultiply($text, 0)); // =>
```

Specify type declarations when defining the function.

## Hints

* Don't forget that the type also needs to be specified for the return value
* The `str_repeat()` function will help you repeat the string
