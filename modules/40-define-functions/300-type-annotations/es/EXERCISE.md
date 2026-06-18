La aplicación crea separadores de texto a partir de caracteres repetidos — por ejemplo, `-------` o `=====`. Implementa la función `wordMultiply()`. Debe aceptar dos parámetros:

* Una cadena
* Un número que indica cuántas veces hay que repetir la cadena

Y devuelve una cadena que se repite n veces. Si se pasa cero, se devuelve una cadena vacía.

```php
<?php

$text = 'php';
print_r(wordMultiply($text, 2)); // => phpphp
print_r(wordMultiply($text, 0)); // =>
```

Indica las declaraciones de tipos al definir la función.

## Pistas

* No olvides que el tipo también hay que indicarlo en el valor de retorno
* La función `str_repeat()` te ayudará a repetir la cadena
