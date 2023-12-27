
Escribe una función `isNeutralSoldier()` que reciba dos argumentos:

1. El color de la armadura (cadena de texto). Opciones posibles: `red`, `yellow`, `black`.
2. El color del escudo (cadena de texto). Opciones posibles: `red`, `yellow`, `black`.

La función devuelve `true` si *el color de la armadura no es rojo* y *el color del escudo es negro*. En caso contrario, devuelve `false`.

Ejemplos de uso:

```php
<?php

isNeutralSoldier('yellow', 'black'); // true
isNeutralSoldier('red', 'black');    // false
isNeutralSoldier('red', 'red');      // false
```
