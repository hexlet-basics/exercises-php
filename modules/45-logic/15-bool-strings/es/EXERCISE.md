Al registrarse en un sitio web, el programa comprueba que la contraseña sea lo suficientemente larga: más de 5 caracteres. Escribe una función `isLongWord()` que devuelva `true` si la longitud de la palabra dada es mayor que 5 caracteres, y `false` en caso contrario.

Ejemplo:

```php
<?php

var_dump(isLongWord('apple'));  // => bool(false)
var_dump(isLongWord('banana')); // => bool(true)
```
