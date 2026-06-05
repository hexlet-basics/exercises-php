Completa la función `trimAndRepeat()`. Recibe una cadena, un `offset` — el número de caracteres que hay que recortar por la izquierda (0 por defecto), y `repetitions` — cuántas veces hay que repetir la cadena (1 por defecto). La firma ya está definida en la plantilla. La función devuelve la cadena resultante:

```php
<?php

$text = 'python';

trimAndRepeat($text, offset: 3, repetitions: 2); // honhon
trimAndRepeat($text, repetitions: 3); // pythonpythonpython
trimAndRepeat($text); // python
```

## Pista

* Usa `substr()` para recortar la cadena y `str_repeat()` para repetirla
