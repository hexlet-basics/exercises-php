Implementa la función `generatePin()`. Devuelve un código PIN aleatorio de cuatro dígitos en forma de cadena.

Cada dígito del código PIN es un número entero aleatorio independiente de 0 a 9.

```php
<?php

print_r(generatePin()); // => por ejemplo, "4823" o "0571"
print_r(generatePin()); // => por ejemplo, "1942" o "0037"
```

Añade la declaración del tipo de retorno.

## Pista

Genera cada uno de los cuatro dígitos con `rand(0, 9)` y construye la cadena usando interpolación.
