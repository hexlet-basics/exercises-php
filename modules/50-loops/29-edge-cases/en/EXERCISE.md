
Implement an `isArgumentsForSubstrCorrect` predicate function that takes three arguments:

1. the string
2. the index from which to begin the extraction
3. the length of the substring to be extracted

The function returns `false` if at least one of the conditions is true:

* The substring extracted has a negative length
* The index set is negative
* The index set exceeds the boundary of the whole string
* The length of the substring plus the given index exceeds the boundary of the whole string

Otherwise the function returns `true`.

Don't forget that indexes start with `0`, so the index of the last element is "string length minus 1".

Call example:

```php
<?php

$str = 'Sansa Stark';
isArgumentsForSubstrCorrect($str, -1, 3);  // false
isArgumentsForSubstrCorrect($str, 4, 100); // false
isArgumentsForSubstrCorrect($str, 10, 10); // false
isArgumentsForSubstrCorrect($str, 11, 1);  // false
isArgumentsForSubstrCorrect($str, 3, 3);   // true
isArgumentsForSubstrCorrect($str, 0, 5);   // true
```
