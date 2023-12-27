En esta lección implementaremos la función `mysubstr()`, que extrae una subcadena de una cadena de longitud especificada.

Recibe dos argumentos:

* La cadena
* La longitud

Esta función devuelve la subcadena comenzando desde el primer carácter:

```php
<?php

function mysubstr($str, $length)
{
    $index = 0;
    $result = '';
    while ($index < $length) {
        $currentChar = $str[$index];
        $result = "{$result}{$currentChar}";
        $index = $index + 1;
    }

    return $result;
}

$str = 'Si miro hacia atrás, estoy perdido';

mysubstr($str, 1); // 'i'
mysubstr($str, 7); // 'Si miro'
```

https://replit.com/@hexlet/php-basics-edge-cases-mysubstr

Parece que todo está bien. Pero nuestra función contiene muchos errores porque no tiene en cuenta los llamados **casos límite**. La función funciona correctamente solo con argumentos normales. Pero no sabemos cómo se comportará si le pasamos estas longitudes:

* `0`
* Un número negativo
* Un número que excede la longitud real de la cadena

La función `mysubstr()` no está diseñada para manejar estos casos. Podríamos pensar que no es un problema: la función funciona en condiciones normales y simplemente no debemos pasarle "argumentos incorrectos".

En un mundo ideal, sí, pero en el mundo real, tu código se ejecutará en diferentes situaciones, con diferentes combinaciones de condiciones y datos. No se puede estar seguro de que los argumentos siempre serán correctos, por lo que debemos tener en cuenta todos los casos, dentro de los límites de la lógica.

Los casos límite son la causa más común de errores lógicos en los programas. Los programadores a menudo olvidan tener en cuenta algo. Estos errores a menudo no se manifiestan de inmediato y pueden no causar problemas visibles durante mucho tiempo. El programa sigue funcionando, pero en algún momento se descubre que hay errores en los resultados.

A menudo, la causa radica en la débil tipificación de PHP. La capacidad para manejar este tipo de errores viene con la experiencia, a través de problemas constantes del tipo "¡Ups, olvidé verificar si la cadena está vacía!".

Imaginemos una función extendida `mysubstr()`. Recibe tres argumentos:

* La cadena
* El índice
* La longitud de la subcadena a extraer

Veamos ejemplos de llamadas:

```php
<?php

$str = 'Si miro hacia atrás, estoy perdido';
mysubstr($str, 0, 1); // 'i'
mysubstr($str, 3, 6); // 'i miro'
```

Discutamos qué podría salir mal. ¿Qué casos límite debemos tener en cuenta?

* Longitud negativa de la subcadena a extraer
* Índice negativo especificado
* El índice especificado está fuera de los límites de toda la cadena
* La longitud de la subcadena, sumada al índice especificado, está fuera de los límites de toda la cadena

En la implementación de la función, cada caso límite será un fragmento de código separado, probablemente implementado con `if`.

Para escribir la función `mysubstr()` y protegernos de estos casos, debemos escribir una función separada que verifique la corrección de los argumentos. Abordaremos esto en la tarea de esta lección.
