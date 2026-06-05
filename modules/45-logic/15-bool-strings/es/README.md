Las operaciones de comparación funcionan tanto con números como con cadenas. En PHP las cadenas se comparan lexicográficamente: carácter por carácter, de izquierda a derecha, según los códigos de los caracteres.

```php
<?php

var_dump('apple' < 'banana'); // => bool(true)
var_dump('cat' > 'dog');      // => bool(false)
```

Aquí `'apple' < 'banana'` porque el código de `a` (97) es menor que el código de `b` (98). El código de un carácter se puede consultar con la función `ord()`. La comparación distingue entre mayúsculas y minúsculas: el código de `'Z'` (90) es menor que el de `'a'` (97).

Las comparaciones son expresiones, por lo que se pueden combinar con otras expresiones, por ejemplo con la función `strlen()`, que devuelve la longitud de una cadena:

```php
<?php

var_dump(strlen('apple') > 3); // => bool(true)
var_dump(strlen('hi') > 3);    // => bool(false)
```

PHP también tiene muchas funciones predicado integradas para cadenas, por ejemplo:

```php
<?php

var_dump(str_starts_with('hello', 'he')); // => bool(true)
var_dump(str_ends_with('hello', 'lo'));   // => bool(true)
var_dump(str_contains('hello', 'ell'));   // => bool(true)
```
