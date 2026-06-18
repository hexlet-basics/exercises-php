En PHP, al igual que en matemáticas, se pueden combinar varias operaciones en una sola línea. El intérprete procesa estas expresiones paso a paso, siguiendo ciertas reglas. Esta propiedad de las operaciones se llama **composición**.

Veamos un ejemplo:

```php
<?php

print_r(2 * 4 * 5 * 10);
```

Este código consta de varias operaciones de multiplicación combinadas en una sola expresión. Para entender cómo el intérprete evalúa la expresión, analicémosla por etapas:

- Primero se calcula `2 * 4`: `8 * 5 * 10`
- Luego `8 * 5`: `40 * 10`
- Y, por último, `40 * 10`: `400`

El resultado final es `400`.

## ¿Y si las operaciones son diferentes?

Todo es sencillo mientras se usan los mismos operadores. Pero ¿qué ocurre si combinamos, por ejemplo, la multiplicación y la suma?

```php
<?php

print_r(2 + 3 * 4);
```

```text
2 + 3 * 4
    └─┬─┘
2 +  12
└──┬───┘
   14
```

¿El resultado será `20` o `14`? La respuesta es `14`.

Esto se debe a que en PHP, al igual que en matemáticas, las operaciones tienen prioridad. La multiplicación se realiza antes que la suma, a menos que se usen paréntesis. Veremos esto con más detalle en la lección sobre prioridades.

## Ejemplos con resta y números negativos

La misma regla funciona para la resta:

```php
<?php

print_r(10 - 2 * 3); // => 4
```

Primero se realiza la multiplicación: `10 - 6 = 4`.

Si en la expresión hay números negativos, el menos unario se aplica después de la potenciación:

```php
<?php

print_r(-2 ** 2); // => -4, dos elevado a dos, luego se aplica el menos
print_r(-2 * 5);  // => -10, menos dos multiplicado por cinco
print_r(4 + -2);  // => 2
print_r(6 - -2);  // => 8
```

En todos los ejemplos, excepto el primero, primero se calcula el menos unario (`-2`) y luego se realizan las demás operaciones.

Analicemos con más detalle el último ejemplo:

```php
<?php

print_r(6 - -2); // => 8
```

Primero se calcula el menos unario (`-2`), y luego la operación se convierte en `6 - (-2)`, lo que da `8`. Esto es lo mismo que:

```php
<?php

print_r(6 + 2); // => 8
```

## Qué hay que recordar

- Las expresiones pueden constar de varias operaciones.
- PHP las evalúa por etapas: de izquierda a derecha, respetando la prioridad de las operaciones.
- Los paréntesis se pueden usar para indicar explícitamente el orden de los cálculos.
