What happens when we "change" a string in PHP? Built-in functions like `strtoupper()` do not modify the original string — they return a new one:

```php
<?php

$firstName = 'Alexander';
print_r(strtoupper($firstName)); // => ALEXANDER
print_r($firstName); // => Alexander
```

This happens because of the immutability of primitive values in PHP: a string itself cannot be changed after creation. The immutability of primitive types is important for many reasons. The key reason is performance.

But sometimes we need to change a string. That's what variables are for:

```php
<?php

$firstName = 'Alexander';
$firstName = strtoupper($firstName);
print_r($firstName); // => ALEXANDER
```

There is a big difference between *changing the value of a variable* and *changing the value itself*. You can't change primitive values in PHP, but you can replace the value of a variable without any problem.
