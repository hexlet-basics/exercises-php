Implement the `generatePin()` function. It returns a random four-digit PIN code as a string.

Each digit of the PIN code is an independent random integer from 0 to 9.

```php
<?php

print_r(generatePin()); // => e.g. "4823" or "0571"
print_r(generatePin()); // => e.g. "1942" or "0037"
```

Add a return type declaration.

## Hint

Generate each of the four digits with `rand(0, 9)` and build the string using interpolation.
