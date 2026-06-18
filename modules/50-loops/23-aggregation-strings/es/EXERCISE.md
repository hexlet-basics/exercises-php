Implementa la función `sanitizePhoneNumber()`, que recibe un número de teléfono de un formulario y devuelve una cadena sin espacios, paréntesis ni guiones.

Los usuarios introducen los números de distintas formas, pero antes de guardarlos suelen normalizarse a un único formato. Recorre la cadena original carácter por carácter y construye un nuevo número solo con los caracteres útiles.

```php
<?php

sanitizePhoneNumber('+7 (999) 123-45-67'); // '+79991234567'
sanitizePhoneNumber('8 800 555 35 35');    // '88005553535'
sanitizePhoneNumber('(123) 456-7890');     // '1234567890'
```

### Pistas

* El resultado final es una cadena.
* Usa una cadena vacía como valor inicial.
* La función `str_contains()` te ayudará a comprobar si un carácter está en el conjunto `' ()-'`.
