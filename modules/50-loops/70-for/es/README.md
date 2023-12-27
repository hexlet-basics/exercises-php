El ciclo `while` es ideal para situaciones en las que no se conoce de antemano la cantidad de iteraciones, por ejemplo, al buscar un número primo. Cuando se conoce la cantidad de iteraciones, es preferible utilizar el ciclo `for`. En esta lección aprenderemos sobre él.

Veamos la implementación de invertir una cadena utilizando el ciclo `for`:

```php
<?php

function reverseString($str)
{
    $result = '';

    for ($i = 0; $i < strlen($str); $i += 1) {
        $currentChar = $str[$i];
        $result = "{$currentChar}{$result}";
    }

    return $result;
}
```

https://replit.com/@hexlet/php-basics-for-reversestring

Este código se puede leer de la siguiente manera:

> El ciclo con el índice `$i` se repite mientras se cumpla la condición `$i < strlen($str)`, y después de cada paso, `$i` se incrementa en 1.

Veamos qué se encuentra entre paréntesis:

1. Valor inicial del contador: este código se ejecuta exactamente una vez antes de la primera iteración.
2. Predicado (condición de repetición del ciclo): se ejecuta en cada iteración, al igual que en el `while`.
3. Descripción del cambio del contador: este código se ejecuta al final de cada iteración.

Por lo demás, el funcionamiento es exactamente igual al del ciclo `while`.
