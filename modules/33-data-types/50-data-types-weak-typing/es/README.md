Podíamos sumar números porque la operación de suma es una operación para el tipo "número". Y si aplicamos esta operación a un número y una cadena:

```php
<?php

print_r(1 + '7'); // => 8
```

`'7'` es una cadena, no un número, pero el intérprete de PHP devuelve `8`, como si estuviéramos sumando dos números. Cuando PHP encuentra una incompatibilidad de tipos, intenta convertir la información por sí mismo. En este caso, convirtió la cadena `'7'` en el número `7` y luego sumó `1` y `7`.

No todos los lenguajes hacen esto. PHP es un lenguaje con **tipado débil**. Conoce la existencia de diferentes tipos, pero no los trata de manera estricta. Intenta convertir la información cuando parece razonable.

En los lenguajes con **tipado fuerte**, no se puede sumar un número y una cadena.

PHP fue creado para Internet, y en Internet toda la información es una cadena. Incluso cuando ingresamos un número de teléfono o una fecha de nacimiento en un sitio web, esa información llega al servidor como una cadena, no como un número. Por eso, los autores del lenguaje decidieron que convertir automáticamente los tipos es correcto y conveniente.

Esta conversión automática e implícita de tipos es realmente conveniente. Pero en la práctica, esta característica del lenguaje crea muchos errores y problemas difíciles de encontrar. El código puede funcionar a veces y otras veces no. Esto depende de si la conversión automática tuvo "suerte" en un caso particular. El programador no se dará cuenta de esto de inmediato.

En futuras tareas nos encontraremos con este comportamiento más de una vez. A menudo surgirá la pregunta "¿por qué mi código no funciona como espero?".
