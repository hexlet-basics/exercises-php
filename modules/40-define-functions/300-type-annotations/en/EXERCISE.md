Implement the `wordMultiply()` function. It takes a string and a number, and returns the string repeated that many times. If zero is passed, it returns an empty string:

```php
<?php

$text = 'php';
print_r(wordMultiply($text, 2)); // => phpphp
print_r(wordMultiply($text, 0)); // =>
```

Add type declarations to the function definition.

## Hints

* Don't forget the return type declaration
* Use `str_repeat()` to repeat the string
