La conversión de tipos es una operación común en el desarrollo web. Para realizarla, se puede confiar en la tipificación débil. Sin embargo, en muchas situaciones es mejor realizar la conversión de forma explícita utilizando una sintaxis especial. Este código es más comprensible y predecible.

Ejemplo de conversión explícita de tipos:

```php
<?php

// Los ejemplos son un poco artificiales
// En realidad, este mecanismo es útil al trabajar con variables
print_r((string) 5);
print_r((int) '345');

// La conversión de tipos se puede utilizar dentro de expresiones compuestas
print_r('Esto es ' . ((string) 5)); // => 'Esto es 5'
```

La conversión explícita de tipos funciona de la siguiente manera: se especifica el tipo deseado antes del valor entre paréntesis. Como resultado, el valor a la derecha se convierte en un valor de otro tipo, especificado a la izquierda entre paréntesis. Hasta ahora, solo estamos familiarizados con dos tipos, pero la conversión funciona para cualquier tipo.

En situaciones más complejas, al utilizar funciones que veremos más adelante, se encuentran conversiones múltiples: `(string) (5 + ((int) '4'))`. El orden de evaluación de esta expresión es el siguiente:

```php
<?php

(int) '4';  // 4
5 + 4;      // 9
(string) 9; // '9'
```
