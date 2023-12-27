La tarea de una condición es obtener una respuesta a una pregunta, pero generalmente eso no es suficiente y es necesario realizar una acción específica dependiendo de la respuesta.

Escribamos una función que determine el tipo de oración que se le pasa como argumento. Al principio, distinguirá entre oraciones normales e interrogativas:

```php
<?php

function getTypeOfSentence($sentence)
{
    // Una forma sencilla de obtener el último carácter
    $lastChar = $sentence[-1];
    if ($lastChar === '?') {
        return 'pregunta';
    }

    return 'normal';
}

getTypeOfSentence('Hodor');  // normal
getTypeOfSentence('Hodor?'); // pregunta
```

`if` es una instrucción. Entre paréntesis se le pasa una expresión condicional y luego se describe un bloque de código entre llaves. Este bloque de código se ejecutará solo si la condición es verdadera. Si la condición es falsa, se omitirá el bloque de código entre llaves y la función continuará su ejecución.

En nuestro caso, la siguiente línea de código es `return 'normal';`. Esto hará que la función devuelva una cadena y finalice. Como puedes ver, `return` puede estar en cualquier lugar de la función, incluso dentro de un bloque de código condicional.
