Nuestro sitio web verifica automáticamente tus soluciones. ¿Cómo funciona?

En el caso más simple, la verificación ejecuta tu código y compara la salida en pantalla con el resultado esperado. Por ejemplo, si la tarea dice: «Imprime en la pantalla el número 10», entonces tu código en PHP podría verse así:

```php
<?php

print_r(10);
```

La verificación ejecutará este código y se asegurará de que en la pantalla realmente apareció `10`. Si la salida coincide con la esperada, la solución se acepta. De lo contrario, verás un error:

```text
Failed asserting that two strings are equal.
--- Expected
+++ Actual
-'10'
+'9'

¡FALLOS!
Pruebas: 1, Afirmaciones: 1, Fallos: 1.
```

La línea con `+` muestra el resultado real que devolvió tu código, y la línea con `-` muestra el valor esperado.

En las siguientes lecciones, más complejas, escribirás funciones. Estas reciben datos y devuelven un resultado. En tales tareas, la verificación funciona un poco diferente: llama a tu función con distintos argumentos y sabe de antemano qué respuesta debe obtenerse en cada caso.

Por ejemplo, si necesitas escribir una función que sume dos números, la verificación le pasará distintos pares de números y comparará el resultado con la suma correcta. Si las respuestas coinciden en todos los casos, la solución se considera correcta.

Este enfoque se llama pruebas y se utiliza en el desarrollo real. Las pruebas ayudan a comprobar si el programa funciona correctamente y a detectar rápidamente un error tras los cambios.

Es precisamente por eso que nuestro sitio web dice «Pruebas superadas» cuando resuelves correctamente la tarea.

## ¿Es mi error o no?

A veces, durante el proceso de resolución, parecerá que hiciste todo correctamente, pero la verificación no acepta la solución. Esto sucede muy raramente. Las pruebas se ejecutan automáticamente después de cada cambio, por lo que una verificación rota normalmente no llega al sitio.

En la gran mayoría de estos casos, el error se encuentra en el código de la solución. Puede ser muy sutil: en lugar de una letra en inglés, escribiste accidentalmente una rusa; en lugar de mayúsculas, usaste minúsculas; o te olvidaste de imprimir una coma. También hay situaciones más complejas. Por ejemplo, la solución funciona para un conjunto de datos de entrada, pero no para otro.

Por eso, lee siempre atentamente la descripción de la tarea y la salida de las pruebas. Casi con seguridad hay allí una indicación del error.

Si, en cambio, estás seguro de que el problema está en la tarea o has encontrado una imprecisión, escribe a nuestra [comunidad](https://t.me/hexletcommunity), en el canal _'Comentarios'_.
