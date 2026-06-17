La expresión `match` apareció en PHP 8 y resuelve la misma tarea que `switch`: elige un resultado según el valor de una variable. Las construcciones son similares, pero `match` es más corta y funciona como una expresión. Comparémoslas con un ejemplo. Así se selecciona un texto según el estado del pedido con `switch`:

```php
<?php

switch ($status) {
    case 'processing':
        $statusText = 'El pedido está en proceso';
        break;
    case 'paid':
        $statusText = 'El pedido está pagado';
        break;
    case 'new':
        $statusText = 'Pedido nuevo';
        break;
    default:
        $statusText = 'Estado desconocido';
}
```

Lo mismo con `match` ocupa menos espacio, y el resultado va directamente a la variable:

```php
<?php

$statusText = match ($status) {
    'processing' => 'El pedido está en proceso',
    'paid' => 'El pedido está pagado',
    'new' => 'Pedido nuevo',
    default => 'Estado desconocido',
};
```

```text
match (valor) {
  │
  ├── 'a' → resultado 1
  ├── 'b' → resultado 2
  ├── 'c' → resultado 3
  └── default → resultado por defecto
}
```

A la izquierda de la flecha `=>` está el valor a comparar, y a la derecha, cualquier expresión que se convertirá en el resultado. La rama `default` se activa cuando ningún valor coincide y cumple el papel de `else`. Si varios valores llevan al mismo resultado, se enumeran separados por comas:

```php
<?php

$type = match ($size) {
    'xs', 's' => 'small',
    'm' => 'medium',
    'l', 'xl' => 'large',
};
```

La principal diferencia con `switch` es que `match` es una **expresión**. Toda la construcción se evalúa a un valor, por lo que el resultado se puede asignar a una variable o devolver desde una función de inmediato. `switch` no puede hacer esto; necesita una variable aparte o un `return` dentro de un `case`. Hay otras diferencias:

* `match` compara los valores de forma estricta, como el operador `===`, sin conversión automática de tipos. `switch` compara de forma no estricta, con `==`.
* `match` ejecuta exactamente una rama, por lo que no se necesita `break`. En `switch`, sin `break`, el control cae en cascada al siguiente `case`.
* Si nada coincide en `match` y no hay `default`, el programa termina con un error `UnhandledMatchError`. En el mismo caso, `switch` no hace nada.

Como `match` devuelve un valor, su resultado a menudo se devuelve directamente desde la función con `return`:

```php
<?php

function countItems(int $count): ?string
{
    return match ($count) {
        1 => 'one',
        2 => 'two',
        default => null,
    };
}

print_r(countItems(2)); // => two
```

Técnicamente siempre se puede prescindir de `match`, igual que de `switch`. Pero cuando hay que elegir un resultado según valores concretos de una variable, `match` expresa esa intención con la mayor claridad, y ese código es más fácil de leer que una cadena de `elseif`.
