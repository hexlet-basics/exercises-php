Escribe una función `isFalsy()` que compruebe si el valor dado se trata como falso (falsy) desde el punto de vista de PHP. Para realizar esta comprobación, compara el valor con `false` usando la comparación no estricta `==`.

```php
<?php

isFalsy(false);  // true
isFalsy(0);      // true
isFalsy('help'); // false
isFalsy(10);     // false
```
