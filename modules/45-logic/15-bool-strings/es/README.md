Las operaciones de comparación funcionan con números y con cadenas. En PHP las cadenas se comparan lexicográficamente: carácter por carácter, de izquierda a derecha, según los códigos numéricos de los caracteres.

```php
<?php

var_dump('apple' < 'banana');  // => bool(true)
var_dump('cat' > 'dog');       // => bool(false)
var_dump('abc' === 'abc');     // => bool(true)
var_dump('hello' !== 'world'); // => bool(true)
```

Aquí `'apple' < 'banana'` porque el código de `a` (97) es menor que el código de `b` (98), y es precisamente el primer carácter el que decide el resultado de la comparación. El código de un carácter se puede consultar con la función `ord()`:

```php
<?php

print_r(ord('a')); // => 97
print_r(ord('b')); // => 98
```

La comparación distingue entre mayúsculas y minúsculas: el código de `'Z'` (90) es menor que el código de `'a'` (97). Un ejemplo de comparación donde las primeras letras son de distinto caso:

```php
<?php

var_dump('Zebra' < 'apple');  // => bool(true)  — 'Z'(90) < 'a'(97)
var_dump('apple' < 'Banana'); // => bool(false) — 'a'(97) > 'B'(66)
var_dump('Apple' < 'apple');  // => bool(true)  — 'A'(65) < 'a'(97)
```

Escribamos una función que compruebe si una palabra empieza con una letra dada. Para ello, tomamos el primer carácter de la cadena y lo comparamos con la letra deseada:

```php
<?php

function startsWithLetter(string $word, string $letter): bool
{
    return $word[0] === $letter;
}

var_dump(startsWithLetter('apple', 'a'));  // => bool(true)
var_dump(startsWithLetter('banana', 'a')); // => bool(false)
```

Las operaciones de comparación son el mismo tipo de expresiones que las aritméticas. En ellas se pueden sustituir valores ya preparados y otras expresiones, como en el ejemplo anterior: `$word[0]`. Por ejemplo, en lugar de un número se puede usar el resultado de la función `strlen()`, que devuelve la longitud de una cadena:

```php
<?php

var_dump(strlen('apple') > 3); // => bool(true), porque strlen('apple') es 5
var_dump(strlen('hi') > 3);    // => bool(false), porque strlen('hi') es 2
```

En el ejemplo anterior primero se ejecuta la función `strlen('apple')`, cuyo resultado es el número `5`. Luego ese número se compara con `3`. Dicho de otro modo, primero se calculan los argumentos de la expresión (por ejemplo, la longitud de la cadena) y luego se realiza la operación de comparación.

Así se pueden combinar distintas operaciones para obtener comprobaciones más complejas.

## Predicados útiles

PHP tiene muchas funciones predicado integradas para trabajar con cadenas. Devuelven `true` o `false` y ayudan a comprobar distintas propiedades de una cadena. A continuación se muestran las más utilizadas:

```php
<?php

var_dump(str_starts_with('hello', 'he')); // => bool(true) — la cadena empieza con 'he'
var_dump(str_ends_with('hello', 'lo'));   // => bool(true) — la cadena termina en 'lo'
var_dump(str_contains('hello', 'ell'));   // => bool(true) — la cadena contiene 'ell'
```

Estas funciones permiten comprobar las cadenas según las condiciones necesarias directamente en el código, sin escribir funciones adicionales.
