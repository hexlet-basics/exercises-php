
Implement a function `hasAtSymbol()` that checks whether an email contains the `@` symbol.

The function should return `true` as soon as it finds `@`. If the loop reached the end of the string and the symbol wasn't found, the function should return `false`.

```php
<?php

hasAtSymbol('support@example.com'); // true
hasAtSymbol('wrong-email');         // false
hasAtSymbol('@admin');              // true
```
