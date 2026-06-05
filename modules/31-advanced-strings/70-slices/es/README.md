Usa `substr()` para extraer parte de una cadena. El formato es `substr(cadena, inicio, longitud)`:

```php
<?php

$text = 'Hello, World!';
print_r(substr($text, 7));     // => World!
print_r(substr($text, 7, 5));  // => World
print_r(substr($text, -6));    // => World! (el índice negativo cuenta desde el final)
```

Si se omite la longitud, PHP toma todo desde el índice inicial hasta el final de la cadena.
