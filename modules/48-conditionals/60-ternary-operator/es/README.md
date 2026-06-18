Echa un vistazo a la definición de una función que devuelve el módulo de un número:

```php
<?php

function abs(int $number): int
{
    if ($number >= 0) {
        return $number;
    }

    return -$number;
}

print_r(abs(10) . "\n");  // => 10
print_r(abs(-10) . "\n"); // => 10
```

Pero se puede escribir de forma más concisa. En PHP existe una construcción que funciona como *if-else*, pero que a la vez es una expresión: su resultado se puede devolver directamente desde una función. Se llama **operador ternario** y es el único operador de PHP que requiere tres operandos:

```php
<?php

function abs(int $number): int
{
    return $number >= 0 ? $number : -$number;
}
```

El patrón general se ve así:

```text
<predicado> ? <expresión si verdadero> : <expresión si falso>
```

![Operador ternario](../assets/ternary-operator.png)

Reescribamos la versión inicial de `getTypeOfSentence()` de la misma manera. Veamos cómo era:

```php
<?php

function getTypeOfSentence(string $sentence): string
{
    $lastChar = $sentence[-1];

    if ($lastChar === '?') {
        return 'question';
    }

    return 'normal';
}
```

Y ahora, cómo quedó:

```php
<?php

function getTypeOfSentence(string $sentence): string
{
    $lastChar = $sentence[-1];

    return $lastChar === '?' ? 'question' : 'normal';
}

print_r(getTypeOfSentence('Hodor') . "\n");  // => normal
print_r(getTypeOfSentence('Hodor?') . "\n"); // => question
```

Quizás ya hayas adivinado que un operador ternario se puede anidar dentro de otro operador ternario. Esto es posible, pero es mejor no hacerlo. Este tipo de código es difícil de leer y depurar, por lo que los operadores ternarios anidados se consideran una muy mala práctica.
