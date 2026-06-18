Los programas trabajan con distinta información: texto, números, fechas, listas, valores lógicos. Cada valor en un programa tiene un tipo.

Por ejemplo:

- "Hello, World!" es una cadena de texto (`string`)
- 7, -198, 0 son números enteros (`int`)
- 3.14, -0.01, 1.0 son números racionales (`float`)

## ¿Qué es un tipo de dato?

Un tipo de dato define:

- qué valores le pertenecen;
- qué operaciones se pueden realizar con él.

Por ejemplo, los números se pueden sumar, dividir y multiplicar. Las cadenas de texto, en cambio, se unen de otra forma: mediante la concatenación. Multiplicar una cadena por otra cadena no tiene sentido y no está permitido:

```php
// No se puede: 'mamá' * 'cuaderno'
```

Un lenguaje de programación reconoce los tipos. Por eso PHP no nos permitirá multiplicar texto por texto, pero sí permitirá multiplicar un número por otro número. La presencia de tipos y de tales restricciones en el lenguaje protege a los programas de errores accidentales.

## Los números y las cadenas pertenecen a tipos distintos

A diferencia de las cadenas de texto, los números no necesitan estar entre comillas. Ejemplo de impresión de un número:

```php
<?php

print_r(5);  // => 5
print_r(-5); // => -5
```

Ejemplo de impresión de una cadena:

```php
<?php

print_r('5');  // => 5
print_r('-5'); // => -5
```

En la pantalla el resultado se ve igual, pero dentro del programa son cosas completamente diferentes:

| Valor    | Tipo de dato          |
|----------|-----------------------|
| `5`      | `int` (número entero) |
| `'5'`    | `string` (cadena)     |

El número `5` y la cadena `'5'` son valores diferentes, y las operaciones con ellos funcionan de forma distinta. Eso sí, cuando los tipos no coinciden, PHP a menudo intenta convertir un tipo en otro por sí mismo. Qué tan cómodo es esto y por qué es peligroso lo veremos un poco más adelante en este módulo.

## Números enteros y racionales

PHP distingue dos clases de números:

- `int` designa los números enteros: -3, 0, 7, 100000
- `float` designa los números reales (racionales): 1.0, -3.14, 2.718

Esta separación está relacionada con las particularidades de cómo están construidos los ordenadores — hablamos de ello en la lección sobre los números de punto flotante.

Ejemplo:

```php
<?php

print_r(10.234); // => 10.234
print_r(-0.4);   // => -0.4
```

En ellos se pueden guardar valores fraccionarios y usarlos en cálculos:

```php
<?php

print_r(3.5 + 1.2);  // => 4.7
print_r(5.0 / 2.0);  // => 2.5
print_r(2.75 - 0.5); // => 2.25
```

## Tipos primitivos

Los tipos como:

- string (cadena de texto),
- int (número entero),
- float (número racional)

se llaman primitivos: están incorporados directamente en el propio lenguaje PHP.

```text
Tipos primitivos de PHP
├── int    : números enteros     (7, -3, 0)
├── float  : números fraccionarios (3.14, -0.5)
├── string : cadenas de texto    ('hello')
└── bool   : tipo lógico          (true, false)
```

Además de las cadenas y los números, PHP tiene el tipo booleano `bool` con los valores `true` y `false`, así como el valor especial `null`. Nos encontraremos con ellos con más detalle en el futuro.

También existen tipos compuestos: arrays, objetos y otros. Los conoceremos más adelante. Es más, en PHP se pueden crear tus propios tipos (por ejemplo, clases), pero primero es importante entender bien los primitivos.

## Strings y lines

En inglés, las cadenas de texto en programación se llaman **strings**, y las líneas de los archivos de texto se llaman **lines**. En ruso puede haber confusión, por eso en todas las lecciones diremos «строка» para referirnos al tipo de dato «cadena de texto», y «строчка» para las lines en los archivos.
