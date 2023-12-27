
Write an `isFalsy()` function that checks if the passed value is interpreted as false from PHP's point of view. To do this check, you need to compare `false` with the passed value using `==`.

```php
<?php

isFalsy(false);  // true
isFalsy(0);      // true
isFalsy('help'); // false
isFalsy(10);     // false
```
