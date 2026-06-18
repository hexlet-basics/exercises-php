Recordemos cómo funciona la concatenación. Para ello, unimos las cadenas que necesitamos (o variables con cadenas dentro) mediante un punto `.`.

```php
<?php

$firstName = 'Joffrey';
$greeting = 'Hola';

print_r($greeting . ", " . $firstName . "!");
// => Hola, Joffrey!
```

Pero con expresiones complejas se vuelve difícil ver de inmediato qué texto se obtendrá al final. Especialmente si la cadena usa espacios, comas o comillas: empiezan a dificultar la comprensión. Incluso el ejemplo actual requiere un pequeño esfuerzo para entender qué cadena se obtendrá.

Por esta razón, muchos lenguajes tienen una operación llamada interpolación. La interpolación es una forma de insertar valores de variables directamente dentro de una cadena. En PHP, funciona en cadenas con comillas dobles. Así:

```php
<?php

$firstName = 'Joffrey';
$greeting = 'Hola';

print_r("{$greeting}, {$firstName}!");
// => Hola, Joffrey!
```

Los nombres de las variables se escriben dentro de la cadena entre llaves, y PHP sustituye automáticamente los valores necesarios:

```text
$firstName = 'Joff'
$greeting  = 'Hello'

"{$greeting}, {$firstName}!"
  └────┬────┘  └────┬─────┘
   'Hello'      'Joff'
      └──────┬──────┘
      'Hello, Joff!'
```

Compara estos dos ejemplos uno al lado del otro:

```php
<?php

print_r($greeting . ", " . $firstName . "!");
print_r("{$greeting}, {$firstName}!");
```

La segunda opción es más simple y clara.

En una sola cadena se pueden hacer tantos bloques con llaves como se desee. Es importante recordar: la interpolación solo funciona con comillas dobles. Una cadena entre comillas simples se imprime tal cual, sin sustituir los valores:

```php
<?php

$firstName = 'Joffrey';

print_r('Hola, {$firstName}!');
// => Hola, {$firstName}!
```

## Ejemplo

```php
<?php

$school = 'Hexlet';

$whatIsIt = "{$school} - online courses";
print_r($whatIsIt); // => Hexlet - online courses
```

Esta notación se lee con facilidad: los espacios, guiones y símbolos se ven de inmediato. La cadena se ve exactamente como aparecerá en la salida. Esto hace que el código sea claro y fácil de mantener. Por esta razón, en la mayoría de los lenguajes la interpolación es preferible a la concatenación.

## Por qué es importante

La interpolación es preferible a la concatenación en casi todos los lenguajes de programación modernos. Ella:

- Simplifica la estructura de las cadenas.
- Mejora la legibilidad del código.
- Reduce la cantidad de errores al trabajar con espacios y signos de puntuación.
