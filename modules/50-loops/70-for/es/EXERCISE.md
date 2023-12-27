
Implementa la función `sumOfSeries()`, que calcula la suma de una [serie de números enteros](https://ru.wikipedia.org/wiki/Числовой_ряд). La serie se define por dos números: el número inicial y el número final.

La función recibe dos argumentos numéricos y devuelve la suma de la serie. Por ejemplo, para los argumentos `4` y `7`, la suma será `4 + 5 + 6 + 7 = 22`.

```php
<?php

sumOfSeries(1, 2); // 3
sumOfSeries(1, 3); // 6
sumOfSeries(4, 7); // 22
```

Si los números inicial y final son iguales, el resultado será el mismo número:

```php
<?php

sumOfSeries(1, 1); // 1
```
