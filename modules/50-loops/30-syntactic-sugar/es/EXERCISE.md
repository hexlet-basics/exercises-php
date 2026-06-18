
Los operadores de azúcar sintáctico son especialmente cómodos cuando hay que construir un valor final paso a paso.

Implementa la función `buildProgressBar()`, que recibe la cantidad de pasos completados y la cantidad total de pasos, y luego devuelve una cadena indicadora de progreso.

Los pasos completados se marcan con el carácter `#`, y los restantes con el carácter `-`. Intenta no usar funciones integradas de manejo de cadenas en tu solución.

```php
<?php

buildProgressBar(0, 5); // '-----'
buildProgressBar(3, 5); // '###--'
buildProgressBar(5, 5); // '#####'
```

Te será útil el operador `.=` para construir gradualmente la nueva cadena dentro del bucle `while`. Y el operador `+=` te ayudará a controlar la condición del bucle.
