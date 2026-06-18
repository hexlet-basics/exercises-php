Con un bucle `while` se puede resolver cualquier tarea de recorrido de elementos, pero se distingue por ser verboso. Para `while` hay que introducir de antemano un contador, definir la condición de parada y no olvidar cambiar el contador en el cuerpo del bucle. Cuando hay pocos bucles, esto está bien, pero en el código real los bucles aparecen a cada paso. Por eso gestionar el contador manualmente es tedioso, sobre todo cuando el esquema es siempre el mismo.

Para estas situaciones, PHP tiene el bucle `for`. Reúne toda la gestión del contador en un solo lugar: entre los paréntesis:

```text
while:                      for:

$i = 0;                     for ($i = 0; $i < 5; $i += 1) {
while ($i < 5) {                ...
    ...                     }
    $i += 1;
}
│                           │
└── gestión dispersa        └── toda la gestión en una sola línea
```

Veamos qué se encuentra entre los paréntesis:

1. Valor inicial del contador: este código se ejecuta exactamente una vez antes de la primera iteración
2. Predicado (condición de repetición del bucle): se ejecuta en cada iteración, al igual que en `while`
3. Descripción del cambio del contador: este código se ejecuta al final de cada iteración

En lo demás, el principio de funcionamiento es exactamente igual al del bucle `while`.

Veamos cómo implementar la función de inversión de una cadena mediante el bucle `for`. Esta tarea aparece en las entrevistas:

```php
<?php

function reverseString(string $str): string
{
    // Valor inicial
    $result = '';

    for ($i = 0; $i < strlen($str); $i += 1) {
        $currentChar = $str[$i];
        // Unimos en orden inverso
        $result = "{$currentChar}{$result}";
    }

    // El bucle termina cuando se ha recorrido toda la cadena
    return $result;
}

print_r(reverseString('go!')); // => !og
```

Este código se puede leer así:

> El bucle con índice `$i` se repite mientras se cumpla la condición `$i < strlen($str)`, y después de cada paso `$i` se incrementa en 1

Analicemos en detalle cómo se ejecuta el bucle del ejemplo anterior en cada paso de las iteraciones:

```text
reverseString('go!')

antes del bucle: result = ''

iteración 1: currentChar = 'g'
result = currentChar . result
       = 'g' . ''
       = 'g'

iteración 2: currentChar = 'o'
result = currentChar . result
       = 'o' . 'g'
       = 'og'

iteración 3: currentChar = '!'
result = currentChar . result
       = '!' . 'og'
       = '!og'
```

Ahora contemos la cantidad de apariciones de un carácter en una cadena sin tener en cuenta el caso:

```php
<?php

// $text - texto arbitrario
// $char - carácter que hay que contar
function charsCount(string $text, string $char): int
{
    // Como buscamos la suma, el valor inicial es 0
    $result = 0;

    for ($i = 0; $i < strlen($text); $i += 1) {
        // Llevamos todo a minúsculas
        // para no depender del caso actual
        if (strtolower($text[$i]) === strtolower($char)) {
            $result += 1;
        }
    }

    return $result;
}

charsCount('hexlet!', 'e'); // 2
charsCount('hExlet!', 'e'); // 2
charsCount('hExlet!', 'E'); // 2
charsCount('hexlet!', 'a'); // 0
```
