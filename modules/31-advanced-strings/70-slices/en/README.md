Use `substr()` to extract part of a string. The format is `substr(string, start, length)`:

```php
<?php

$text = 'Hello, World!';
print_r(substr($text, 7));     // => World!
print_r(substr($text, 7, 5));  // => World
print_r(substr($text, -6));    // => World! (negative index counts from the end)
```

If the length is omitted, PHP takes everything from the start index to the end of the string.
