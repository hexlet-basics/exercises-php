Implementa la función `wordMultiply()`. Recibe una cadena y un número, y devuelve la cadena repetida esa cantidad de veces. Si se pasa cero, devuelve una cadena vacía:

```php
<?php

$text = 'php';
print_r(wordMultiply($text, 2)); // => phpphp
print_r(wordMultiply($text, 0)); // =>
```

Añade declaraciones de tipos a la definición de la función.

## Pistas

* No olvides la declaración del tipo de retorno
* Usa `str_repeat()` para repetir la cadena
