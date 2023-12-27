Intentemos cambiar la función del ejemplo anterior para que no solo devuelva el tipo de oración, sino toda la frase *La oración es normal* o *La oración es una pregunta*:

```php
<?php

function getTypeOfSentence($sentence)
{
    $lastChar = $sentence[-1];

    if ($lastChar === '?') {
        $sentenceType = 'pregunta';
    } else {
        $sentenceType = 'normal';
    }

    return "La oración es {$sentenceType}";
}

getTypeOfSentence('Hodor');  // La oración es normal
getTypeOfSentence('Hodor?'); // La oración es una pregunta
```

Hemos agregado `else` y un nuevo bloque con llaves. Este bloque se ejecutará solo si la condición en `if` es falsa.

Hay dos formas de estructurar la construcción *if-else*. Usando la negación `!==` se puede cambiar el orden de los bloques:

```php
<?php

function getTypeOfSentence($sentence)
{
    $lastChar = $sentence[-1];

    if ($lastChar !== '?') {
        $sentenceType = 'normal';
    } else {
        $sentenceType = 'pregunta';
    }

    return "La oración es {$sentenceType}";
}
```

¿Cuál forma es preferible? Por lo general, a las personas les resulta más fácil pensar de manera directa en lugar de a través de la negación. Trate de elegir la verificación sin negación y ajuste el contenido de los bloques en consecuencia.
