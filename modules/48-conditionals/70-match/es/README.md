La estructura `switch` de la lección anterior no es la única versión especializada de `if` en PHP. A partir de PHP 8, el lenguaje cuenta con la expresión `match`. También se debe usar donde hay una cadena de `if else` con comprobaciones de igualdad:

```php
<?php

if ($status === 'processing') {
    $statusText = 'El pedido está en proceso';
} elseif ($status === 'paid') {
    $statusText = 'El pedido está pagado';
} elseif ($status === 'new') {
    $statusText = 'Pedido nuevo';
} else {
    $statusText = 'Estado desconocido';
}
```

Esta comprobación compuesta tiene una característica distintiva. Cada rama es una comprobación del valor de la variable `$status`. La expresión `match` permite escribir este código de forma más corta y expresiva:

```php
<?php

$statusText = match ($status) {
    'processing' => 'El pedido está en proceso', // $status === 'processing'
    'paid' => 'El pedido está pagado',           // $status === 'paid'
    'new' => 'Pedido nuevo',                     // $status === 'new'
    default => 'Estado desconocido',             // else
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

En cuanto al número de elementos, `match` es una estructura compleja. La descripción externa incluye la palabra clave `match` y la variable cuyos valores usa `match` para elegir el comportamiento. Dentro hay ramas, cada una de las cuales describe el resultado para uno de los valores de la variable. Cada rama corresponde a un `if` del ejemplo anterior. La rama `default` es un caso especial que corresponde a la rama `else` de las estructuras condicionales.

La principal diferencia entre `match` y tanto `switch` como un `if` normal es que se trata de una **expresión**. Toda la estructura se evalúa a un valor, por lo que su resultado se puede asignar directamente a una variable o devolver desde una función. No se necesita ningún `break`: se ejecuta exactamente una rama y aquí es imposible la caída en cascada.

Dentro de `match` solo se permite la sintaxis mostrada arriba. A la izquierda de la flecha `=>` se indica el valor a comparar, y a la derecha, la expresión que se convertirá en el resultado. Si varios valores llevan al mismo resultado, se enumeran separados por comas:

```php
<?php

$type = match ($size) {
    'xs', 's' => 'small',
    'm' => 'medium',
    'l', 'xl' => 'large',
};
```

Hay otras diferencias con respecto a `switch`:

* `match` compara los valores de forma estricta, como el operador `===`. En cambio, `switch` usa la comparación no estricta `==`, que realiza una conversión automática de tipos.
* Si ninguna rama coincide y no se especifica `default`, el programa termina con un error `UnhandledMatchError`. En la misma situación, `switch` simplemente no haría nada.

A menudo el resultado de `match` debe devolverse desde la función que lo contiene. Para ello, se coloca un `return` normal antes de `match`:

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

Aunque la expresión `match` aparece en el código, técnicamente siempre se puede prescindir de ella. Su beneficio clave es que expresa mejor la intención del programador cuando hay que comprobar valores concretos de una variable. Ese código es más fácil de leer que los bloques `elseif`.
