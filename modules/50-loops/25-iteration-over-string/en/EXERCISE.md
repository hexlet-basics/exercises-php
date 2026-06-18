Write a function `maskCardNumber()` that hides a bank card number. The function should replace all characters of the string with `*`, except for the last four.

Example of how it works:

```php
<?php

maskCardNumber('1234567812345678'); // '************5678'
maskCardNumber('12345678');         // '****5678'
```
