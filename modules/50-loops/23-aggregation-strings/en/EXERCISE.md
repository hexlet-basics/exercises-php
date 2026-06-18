Implement the `sanitizePhoneNumber()` function, which takes a phone number from a form and returns a string without spaces, parentheses, or hyphens.

Users enter numbers in different ways, but before saving they are often normalized to a single format. Go through the original string character by character and assemble a new number from useful characters only.

```php
<?php

sanitizePhoneNumber('+7 (999) 123-45-67'); // '+79991234567'
sanitizePhoneNumber('8 800 555 35 35');    // '88005553535'
sanitizePhoneNumber('(123) 456-7890');     // '1234567890'
```

### Hints

* The final result is a string.
* Use an empty string as the initial value.
* The `str_contains()` function will help you check whether a character is in the set `' ()-'`.
