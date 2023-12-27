
Los operadores lógicos son un tema importante, por lo que es necesario reforzarlo con un ejemplo y un ejercicio adicional.

Intentemos implementar una función que verifique si un año es bisiesto. Un año es bisiesto si es divisible por 400 o si es divisible por 4 y no es divisible por 100. Como puedes ver, toda la lógica necesaria ya está definida, solo falta trasladarla al código:

```php
<?php

function esBisiesto($año)
{
    return $año % 400 === 0 || ($año % 4 === 0 && $año % 100 !== 0);
}

esBisiesto(2018); // false
esBisiesto(2017); // false
esBisiesto(2016); // true
```

Veamos cada parte:

- La primera condición `$año % 400 === 0`: el resto de la división por 400 es igual a 0, lo que significa que el número es divisible por 400.
- `||` **O**
- La segunda condición `($año % 4 === 0 && $año % 100 !== 0)`
    - `$año % 4 === 0`: el resto de la división por 4 es igual a 0, lo que significa que el número es divisible por 4.
    - `&&` **Y**
    - `$año % 100 !== 0`: el resto de la división por 100 no es igual a 0, lo que significa que el número no es divisible por 100.
