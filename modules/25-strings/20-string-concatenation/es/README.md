A menudo es necesario armar cadenas a partir de varias partes, por ejemplo, unir el nombre y el apellido, añadir una unidad de medida o componer un texto a partir de una plantilla. Para esto se usa la operación de concatenación, es decir, el pegado de cadenas.

## Cómo unir cadenas

En PHP las cadenas se unen mediante el operador `.` (punto). Para sumar números se usa el operador `+`, y para unir cadenas en PHP existe un operador binario aparte que significa pegar el contenido:

```php
<?php

print_r('Dragon' . 'stone');
// => Dragonstone
```

El orden importa. Primero va la parte izquierda (`'Dragon'`), luego la derecha (`'stone'`). El resultado se obtiene en el orden en el que se indican los operandos.

Así funciona la unión de varias cadenas. El código:

```php
<?php

print_r('Hello' . ', ' . 'World!');
```

Ejecución:

```text
'Hello' . ', ' . 'World!'
└──┬──┘   └┬┘   └──┬───┘
   └────┬───┘       │
  'Hello, '    .  'World!'
     └──────┬───────┘
      'Hello, World!'
```

Ejemplos:

```php
<?php

print_r('Kings' . 'wood');     // => Kingswood
print_r('Kings' . 'road');     // => Kingsroad
// Aquí las comillas exteriores son dobles, porque dentro hay una simple
print_r("King's" . 'Landing'); // => King'sLanding
```

PHP permite unir cadenas incluso si están escritas con distintos tipos de comillas. Lo principal es que ambas partes sean cadenas.

## El espacio también es un carácter

Al unir, PHP no inserta espacios automáticamente. Si entre las partes debe haber un espacio, hay que indicarlo manualmente:

```php
<?php

// Espacio al final de la primera cadena
print_r("King's " . 'Landing'); // => King's Landing

// Espacio al inicio de la segunda cadena
print_r("King's" . ' Landing'); // => King's Landing
```

El resultado será el mismo. Pero si no se añade el espacio, las palabras se pegarán.

## Secuencias de escape

En las cadenas se pueden usar secuencias de escape, por ejemplo `\n` para el salto de línea o `\t` para la tabulación. No olvides que en PHP solo funcionan dentro de comillas dobles. En la concatenación se comportan igual que cualquier otro carácter:

```php
<?php

print_r('Hello,' . "\n" . 'World!');
// =>
// Hello,
// World!

print_r('A' . "\t" . 'B');
// => A	B
```

## Conclusión

La concatenación es la unión de cadenas mediante el operador `.`, y las cadenas se pueden unir independientemente del tipo de comillas.

- El pegado ocurre estrictamente en orden de izquierda a derecha
- Los espacios no se añaden automáticamente, hay que incluirlos en las cadenas manualmente
