Consideremos una expresión sencilla:

```php
<?php

print_r(2 + 2 * 2); // => 6
```

El resultado es 6, no 8. Esto se explica por el concepto de precedencia de operadores en matemáticas y programación. Define el orden en que se realizan las operaciones:

- La multiplicación y la división se realizan antes que la suma y la resta.
- La potenciación (**) tiene una precedencia aún mayor.

```text
Precedencia de operadores (de alta a baja):

  **         potenciación
   ↓
  * / %      multiplicación, división, resto
   ↓
  + -        suma, resta
```

Por ejemplo:

```php
<?php

print_r(2 * 2 ** 3); // => 16, porque primero 2 ** 3 = 8, luego 8 * 2 = 16
```

Si hay operaciones con la misma precedencia una al lado de la otra, se realizan de izquierda a derecha:

```php
<?php

print_r(8 / 2 * 3); // => 12, porque primero 8 / 2 = 4, luego 4 * 3 = 12
```

## Controlar el orden de las operaciones

A veces es necesario cambiar el orden de los cálculos. Para ello se utilizan los paréntesis. Permiten indicar qué operaciones deben realizarse primero:

```php
<?php

print_r((2 + 2) * 2); // => 8
```

Los paréntesis se pueden colocar alrededor de cualquier parte de una expresión y anidar unos dentro de otros:

```php
<?php

print_r(3 ** (4 - 2));                   // => 9
print_r(7 * 3 + (4 / 2) - (8 + (2 - 1))); // => 14
```

La regla principal: cierra siempre los paréntesis. Los paréntesis sin pareja provocan errores: tanto los principiantes como los programadores experimentados a veces se olvidan del paréntesis de cierre.

> Escribe los paréntesis en pareja de inmediato. Por ejemplo, escribe () y luego rellena la parte interna. La mayoría de los editores de código (incluido el nuestro) añaden automáticamente el paréntesis de cierre en cuanto escribes el de apertura. Esto también se aplica a otros caracteres emparejados, como las comillas.

## Mejorar la legibilidad

A veces una expresión funciona correctamente pero parece confusa. En esos casos, los paréntesis se pueden añadir simplemente para mayor claridad: no cambiarán el resultado, pero mejorarán la comprensión.

```php
<?php

// Antes
print_r(8 / 2 + 5 - -3 / 2);       // => 10.5

// Después
print_r(((8 / 2) + 5) - (-3 / 2)); // => 10.5
```

Los programas los escriben personas, y también los leen personas. A la computadora no le importa lo claro que esté escrito el código: basta con que sea sintácticamente correcto. Para una persona, un código claro y ordenado es la clave de la comodidad, especialmente al trabajar en equipo o al analizar errores.
