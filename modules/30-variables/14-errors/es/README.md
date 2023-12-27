Es necesario declarar una variable antes de utilizarla. Si se hace después, el programa no funcionará:

```php
<?php

print_r($greeting);
$greeting = '¡Padre!';
// PHP Notice:  Undefined variable: greeting in /private/var/tmp/index.php on line 3
```

La ejecución del programa anterior termina con el error `PHP Notice`_ - este es un error de referencia. Significa que se está utilizando un nombre (identificador) en el código que no está definido. En el propio error se indica el identificador de la variable: `greeting`.

Los errores también pueden ser causados por errores tipográficos al utilizar una variable y al declararla. La cantidad de estos errores se reduce mediante el uso de un editor correctamente configurado. Este editor resalta los nombres que se utilizan sin ser declarados y advierte sobre posibles problemas.
