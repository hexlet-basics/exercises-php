Comparison operations work with strings as well as numbers. In PHP, strings are compared lexicographically: character by character, left to right, using character codes.

```php
<?php

var_dump('apple' < 'banana'); // => bool(true)
var_dump('cat' > 'dog');      // => bool(false)
```

Here `'apple' < 'banana'` because the code of `a` (97) is less than the code of `b` (98). You can check a character code with the `ord()` function. The comparison is case-sensitive: the code of `'Z'` (90) is less than the code of `'a'` (97).

Comparisons are expressions, so you can combine them with other expressions, for example with the `strlen()` function that returns the length of a string:

```php
<?php

var_dump(strlen('apple') > 3); // => bool(true)
var_dump(strlen('hi') > 3);    // => bool(false)
```

PHP also has many built-in predicate functions for strings, for example:

```php
<?php

var_dump(str_starts_with('hello', 'he')); // => bool(true)
var_dump(str_ends_with('hello', 'lo'));   // => bool(true)
var_dump(str_contains('hello', 'ell'));   // => bool(true)
```
