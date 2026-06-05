Write a function `isFalsy()` that checks whether the given value is treated as falsy by PHP. To perform this check, compare the value with `false` using the loose comparison `==`.

```php
<?php

isFalsy(false);  // true
isFalsy(0);      // true
isFalsy('help'); // false
isFalsy(10);     // false
```
