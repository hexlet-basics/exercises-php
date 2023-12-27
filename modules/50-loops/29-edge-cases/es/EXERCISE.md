Implementa la función predicado `isArgumentsForSubstrCorrect`, que recibe tres argumentos:

1. La cadena
2. El índice desde el cual comenzar la extracción
3. La longitud de la subcadena a extraer

La función devuelve `false` si se cumple al menos una de las siguientes condiciones:

* Longitud negativa de la subcadena a extraer
* Índice negativo especificado
* El índice especificado está fuera de los límites de toda la cadena
* La longitud de la subcadena, sumada al índice especificado, está fuera de los límites de toda la cadena

De lo contrario, la función devuelve `true`.

No olvides que los índices comienzan en `0`, por lo que el índice del último elemento es "longitud de la cadena menos 1".

Ejemplo de llamada:

```php
<?php

$str = 'Sansa Stark';
isArgumentsForSubstrCorrect($str, -1, 3);  // false
isArgumentsForSubstrCorrect($str, 4, 100); // false
isArgumentsForSubstrCorrect($str, 10, 10); // false
isArgumentsForSubstrCorrect($str, 11, 1);  // false
isArgumentsForSubstrCorrect($str, 3, 3);   // true
isArgumentsForSubstrCorrect($str, 0, 5);   // true
```
