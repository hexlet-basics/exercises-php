El cuerpo del bucle, al igual que el cuerpo de una función, es el lugar donde se ejecutan las instrucciones. Esto significa que podemos utilizar dentro de él todo lo aprendido anteriormente, por ejemplo, las estructuras condicionales. Así, el programa repite una misma acción varias veces, pero en cada repetición toma una decisión.

Supongamos que necesitamos recorrer los números del `1` al `10` e imprimir solo los pares. El bucle recorre todos los números uno tras otro, y la condición dentro del bucle decide cuáles de ellos llegan a la pantalla.

Para recorrerlos necesitamos un contador. Este guarda el número actual y se incrementa después de cada repetición. Debemos imprimir un número solo cuando pasa la comprobación:

```php
<?php

$number = 1;
while ($number <= 10) {
    if ($number % 2 === 0) {
        print_r("{$number}\n");
    }
    $number = $number + 1;
}

// => 2
// => 4
// => 6
// => 8
// => 10
```

El bucle `while` recorre los números del `1` al `10`. La condición dentro del bucle comprueba el número actual. Si `$number % 2 === 0`, el número es divisible entre `2` sin resto, y el programa lo imprime en la pantalla.

El contador se incrementa después de la comprobación en cualquier caso. Esto es importante. Si incrementas `$number` solo dentro del `if`, el bucle se detendrá en el primer número impar y se ejecutará infinitamente.

## Funcionamiento paso a paso

Antes de la primera repetición, `$number` es igual a `1`.

**Paso 1.** La condición del bucle `$number <= 10` es verdadera, por lo que el programa entra en el cuerpo del bucle. El número `1` es impar, el bloque `if` no se ejecuta. Luego `$number` se incrementa a `2`.

**Paso 2.** La condición del bucle vuelve a ser verdadera. El número `2` es par, por lo que el programa imprime `2`. Luego `$number` se incrementa a `3`.

A continuación, el bucle sigue comprobando cada número. Los números impares los omite, y los pares los imprime en la pantalla. Cuando `$number` se vuelva igual a `11`, la condición `$number <= 10` se volverá falsa, y el bucle terminará.

## Las condiciones cambian la acción, no el movimiento

En este tipo de bucles es conveniente separar las dos partes. El contador lleva el programa al siguiente valor, y el `if` decide qué hacer con el valor actual.

```php
<?php

$number = 1;
while ($number <= 10) {
    if ($number > 5) {
        print_r("{$number}\n");
    }
    $number = $number + 1;
}
```

Aquí el bucle recorre el mismo rango del `1` al `10`, pero la condición dentro es diferente. Por eso el programa imprime solo los números mayores que `5`.

La condición dentro del bucle puede comprobar cualquier cosa. Por ejemplo, la paridad de un número, la coincidencia de un carácter, la longitud de una cadena o el valor de una variable. Lo importante es que el contador siga cambiando para que el bucle pueda terminar.
