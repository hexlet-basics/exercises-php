
El cuerpo del bucle, al igual que el cuerpo de una función, es el lugar donde se ejecutan las instrucciones. Esto significa que podemos utilizar todo lo aprendido anteriormente dentro de él, por ejemplo, estructuras condicionales.

Imagina una función que cuenta cuántas veces aparece una letra en una oración. Aquí tienes un ejemplo de cómo funciona:

```php
<?php

countChars('El miedo corta más profundo que las espadas.', 'e'); // 4
// Si no se encuentra ninguna coincidencia, el resultado es 0
countChars('Sansa', 'y'); // 0
```

Antes de ver el contenido de la función, intenta responder las siguientes preguntas:

* ¿Es esta operación una agregación?
* ¿Cómo se realiza la comprobación de la aparición de un carácter?

```php
<?php

function countChars($str, $char)
{
    $i = 0;
    $count = 0;
    while ($i < strlen($str)) {
        if ($str[$i] === $char) {
            // Solo contamos los caracteres que coinciden
            $count = $count + 1;
        }
        // El contador se incrementa en cualquier caso
        $i = $i + 1;
    }

    return $count;
}
```

Este problema es una agregación. Aunque no cuenta todos los caracteres, aún es necesario analizar cada uno para calcular la suma total.

La diferencia clave de este bucle con los que hemos visto anteriormente es la presencia de una condición dentro del cuerpo. La variable `$count` solo se incrementa cuando el carácter actual coincide con el esperado.

En general, esta es una función agregada típica que devuelve la cantidad de caracteres necesarios al código que la llama.
