Al llamar a una función, los argumentos se pueden pasar de dos maneras. En una **llamada posicional**, los valores van estrictamente en orden. El primero va al primer parámetro, el segundo al segundo. Los **argumentos con nombre** aparecieron en PHP 8 y permiten indicar explícitamente el nombre del parámetro al llamar. Esto resulta cómodo cuando una función tiene muchos parámetros y solo necesitas redefinir algunos. El resto conserva sus valores por defecto.

```php
<?php

function repeat($text, $times)
{
    return str_repeat($text, $times);
}

repeat('Hi', 3);              // llamada posicional
repeat(text: 'Hi', times: 3); // llamada con nombre
```

Internamente usa la función incorporada `str_repeat()` — repite una cadena un número determinado de veces, por eso `repeat('Hi', 3)` devuelve `HiHiHi`.

Ambas variantes de llamada hacen lo mismo. En el segundo caso, escribimos explícitamente que `'Hi'` es el valor de `$text`, y `3` es el valor de `$times`. El nombre del parámetro se indica sin el signo `$`, y después del nombre se pone dos puntos. Desde el punto de vista de la definición de la función, nada ha cambiado. Los argumentos con nombre funcionan para cualquier función, y la función misma no sabe nada de esto. Recibe los valores tal como están descritos en la definición.

```text
function truncate($text, $length) { ... }

Posicionales:  truncate('hello', 3)
                        └──┬──┘  └┬┘
                        $text   $length

Con nombre:    truncate(length: 3, text: 'hello')
                        └───┬───┘  └─────┬─────┘
                        $length        $text
```

Los argumentos con nombre se pueden indicar en cualquier orden. Esto no cambia el resultado del trabajo de la función, porque los valores se vinculan precisamente por el nombre del parámetro:

```php
<?php

repeat(times: 3, text: 'Hi'); // => HiHiHi
```

Los argumentos con nombre se pueden combinar con los posicionales, y en ese caso los posicionales van primero. Tal llamada permite indicar solo aquellos parámetros que necesitas redefinir:

```php
<?php

repeat('Hi', times: 3); // posicionales + con nombre => HiHiHi
```

## Cuándo usar argumentos con nombre

Los argumentos con nombre son útiles cuando una función tiene varios parámetros y no todos necesitan cambiarse. En estos casos puedes indicar solo los parámetros que importan en una llamada concreta, y dejar el resto con sus valores por defecto.

Ya sabes que la función incorporada `round()` tiene el segundo parámetro opcional. En una llamada con nombre se usan los nombres de los parámetros de la firma en la documentación — `round(int|float $num, int $precision = 0)`:

```php
<?php

round(10.252, 1);                 // 10.3
round(num: 10.252, precision: 1); // 10.3 — lo mismo, pero más claro
```

La fuerza de los argumentos con nombre se manifiesta cuando hay varios parámetros opcionales. Veamos la función incorporada `number_format()`, que formatea un número. Su firma simplificada se ve así:

```php
number_format(
    float $num,
    int $decimals = 0,
    string $decimal_separator = '.',
    string $thousands_separator = ','
)
```

Supongamos que queremos cambiar solo el separador de miles, dejando la precisión y el separador decimal por defecto:

```php
<?php

// Sin argumentos con nombre hay que repetir explícitamente
// los valores de todos los parámetros que van antes
number_format(1234.567, 0, '.', ' ');              // => 1 235

// Con argumentos con nombre — indicamos solo el que necesitamos
number_format(1234.567, thousands_separator: ' '); // => 1 235
```

Indicar el separador se volvió más sencillo, a pesar de que antes de él van otros dos parámetros en la lista. Los argumentos con nombre hacen las llamadas más claras. Al leer el código, se ve de inmediato qué valor corresponde a qué parámetro.
