El programa prepara el texto de las notificaciones: elimina caracteres innecesarios del principio y repite el mensaje el número de veces necesario. Completa la función `trimAndRepeat()`, que recibe tres parámetros:

* Una cadena
* `offset` — el número de caracteres por el que hay que recortar la cadena por la izquierda
* `repetitions` — cuántas veces hay que repetir la cadena antes de devolver la cadena resultante

El número de caracteres a recortar es 0 por defecto, y el número de repeticiones es 1 por defecto. La firma de la función con estos valores ya está definida en la plantilla, solo te queda completar el cuerpo.

La función debe devolver la cadena resultante.

```php
<?php

$text = 'python';

trimAndRepeat($text, offset: 3, repetitions: 2); // honhon
trimAndRepeat($text, repetitions: 3); // pythonpythonpython
trimAndRepeat($text); // python
```

## Pistas

* La función `substr()` ayudará a recortar la cadena por la izquierda, y `str_repeat()` a repetirla
* Desde el punto de vista del sistema de comprobación, no importa de qué manera se implemente internamente la función `trimAndRepeat()`. Lo principal es que cumpla la tarea planteada
