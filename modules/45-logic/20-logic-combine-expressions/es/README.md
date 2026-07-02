**Las operaciones lógicas** son expresiones, por lo tanto, se pueden combinar con otras expresiones. Por ejemplo, queremos verificar si un número es par, es decir, si es múltiplo de dos. En programación, para ello se verifica el residuo de la división por dos. Si el residuo es `0`, el número es par. Si el residuo no es `0`, el número es impar.

El residuo de la división es un concepto simple pero importante en aritmética, álgebra, teoría de números y criptografía. Hay que dividir un número en varios grupos iguales, y si algo queda al final, eso es el residuo de la división.

Dividimos caramelos en partes iguales entre personas:

* 7 caramelos, 2 personas: 2 x 3 + residuo 1 (7 no es múltiplo de 2)
* 21 caramelos, 3 personas: 3 x 7 + residuo 0 (21 es múltiplo de 3)
* 19 caramelos, 5 personas: 5 x 3 + residuo 4 (19 no es múltiplo de 5)

El operador `%` calcula el residuo de la división:

* `7 % 2` → `1`
* `21 % 3` → `0`
* `19 % 5` → `4`

Combinemos en una sola expresión el operador lógico de «verificación de igualdad» `===` y el operador aritmético `%`, y escribamos una función que verifique si un número es par:

```php
<?php

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

var_dump(isEven(10)); // => bool(true)
var_dump(isEven(3));  // => bool(false)
```

Las operaciones aritméticas tienen mayor prioridad que las lógicas. Esto significa que primero se calcula la expresión aritmética `$number % 2`, y luego el resultado se compara con cero y se devuelve el resultado de la verificación de igualdad.

Ahora escribamos una función que recibe una cadena y verifica si esta cadena comienza con la letra latina `a`.

Algoritmo:

1. Obtenemos y guardamos en una variable el primer carácter de la cadena-argumento
2. Comparamos si el carácter es igual a la letra latina `a`
3. Devolvemos el resultado

```php
<?php

function isFirstLetterAnA(string $text): bool
{
    $firstLetter = $text[0];
    return $firstLetter === 'a';
}

var_dump(isFirstLetterAnA('orange')); // => bool(false)
var_dump(isFirstLetterAnA('apple'));  // => bool(true)
```

Para que quede claro qué ocurre aquí, intenta expresar en voz alta lo que sucede, de manera similar a como desciframos el proceso en el ejemplo con `isEven()`.

Ahora ya sabes que las operaciones de comparación se utilizan en programación al igual que las aritméticas. Pero recuerda que la igualdad se denota con `===`. Así no confundirás esta operación con la asignación de un valor a una variable.
