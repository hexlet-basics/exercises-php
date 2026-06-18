Las expresiones lógicas permiten comprobar distintas condiciones. Pero por sí solas únicamente devuelven `true` o `false`. Para que un programa pueda realizar distintas acciones según el resultado, PHP cuenta con una construcción especial `if`:

```php
<?php

if (5 > 3) {
    print_r('Yes, it is true');
}
```

Aquí la cadena `'Yes, it is true'` se imprime porque la condición `5 > 3` es verdadera.

```text
┌───────────┐
│ ¿condición?│
└─────┬─────┘
 true │
      ↓
┌───────────┐
│ cuerpo if │
└───────────┘
```

## Bloques de código

Después de la palabra `if`, la condición se escribe entre paréntesis y luego se describe un bloque de código entre llaves. Todas las instrucciones dentro de las llaves pertenecen a un mismo bloque:

```php
<?php

if (10 === 10) {
    print_r("First\n");
    print_r("Second\n");
}

print_r('Goodbye!');
```

Aquí se imprimen `First` y `Second` porque la condición se cumplió. Y `Goodbye!` se imprime en cualquier caso, ya que esa instrucción está fuera del bloque. El principio es el mismo que en la definición de funciones.

## Uso de if dentro de una función

Veamos una función que determina el tipo de la oración que se le pasa. Si termina con un signo de interrogación, la función devuelve `'question'`, de lo contrario devuelve `'normal'`:

```php
<?php

function getTypeOfSentence(string $sentence): string
{
    // Una forma sencilla de obtener el último carácter
    $lastChar = $sentence[-1];

    if ($lastChar === '?') {
        return 'question';
    }

    return 'normal';
}

print_r(getTypeOfSentence('Hodor') . "\n");  // => normal
print_r(getTypeOfSentence('Hodor?') . "\n"); // => question
```

Aquí se usan dos `return` a la vez. Si la condición dentro de `if` se cumple, se ejecuta `return 'question';` y la función finaliza. Si la condición no se cumple, el control pasa a la siguiente línea con `return 'normal';`.

Así, la función tiene varios posibles puntos de salida. Es una práctica frecuente. Según las condiciones, la función puede finalizar de distintas formas.

Aunque la función `getTypeOfSentence()` usa `if`, devuelve cadenas, lo que significa que no es un predicado. Como predicado, veamos una función que comprueba si hay suficiente dinero para una compra:

```php
<?php

function hasEnoughMoney(int $balance, int $price): bool
{
    if ($balance >= $price) {
        return true;
    }

    return false;
}

var_dump(hasEnoughMoney(100, 50)); // => bool(true)
var_dump(hasEnoughMoney(30, 50));  // => bool(false)
```

## if y las expresiones lógicas

Escribimos la función `hasEnoughMoney()` con `if`. Pero en esta forma podría prescindir de él, porque el resultado de la comparación ya es en sí mismo una expresión lógica:

```php
<?php

function hasEnoughMoney(int $balance, int $price): bool
{
    return $balance >= $price;
}
```

En los casos simples, es mejor devolver directamente esa expresión. `if` se necesita cuando dentro del bloque se realizan acciones adicionales además de devolver el resultado. Cuanto más complejos sean los programas que escribamos, más a menudo surgirán estas situaciones.
