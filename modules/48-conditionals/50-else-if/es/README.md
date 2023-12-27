La función `getTypeOfSentence()` solo distingue entre oraciones interrogativas y oraciones normales. Intentemos agregar soporte para oraciones exclamativas:

```php
<?php

function getTypeOfSentence($sentence)
{
    $lastChar = $sentence[-1];

    if ($lastChar === '!') {
        $sentenceType = 'exclamation';
    } else {
        $sentenceType = 'normal';
    }

    if ($lastChar === '?') {
        $sentenceType = 'question';
    }

    return "La oración es {$sentenceType}";
}

getTypeOfSentence('¿Quién?'); // 'La oración es pregunta'
getTypeOfSentence('No');     // 'La oración es normal'
getTypeOfSentence('¡No!');   // 'La oración es exclamación'
```

Hemos agregado otra condición (_exclamation_ se traduce como "exclamación"). Técnicamente, la función funciona, pero hay problemas desde el punto de vista semántico:

* La verificación de la presencia del signo de interrogación ocurre de todos modos, incluso si ya se ha detectado el signo de exclamación.
* La rama `else` se describe específicamente para la primera condición, pero no para la segunda.

Sería más correcto utilizar otra posibilidad de la estructura condicional:

```php
<?php

function getTypeOfSentence($sentence)
{
  $lastChar = $sentence[-1];

  if ($lastChar === '?') {
      $sentenceType = 'question';
  } elseif ($lastChar === '!') {
      $sentenceType = 'exclamation';
  } else {
      $sentenceType = 'normal';
  }

  return "La oración es {$sentenceType}";
}
```

Ahora todas las condiciones se han unificado en una sola estructura.

La estructura `elseif` significa "si la condición anterior no se cumple, pero la condición actual sí se cumple". La estructura resultante es la siguiente:

* Si el último carácter es `?`, entonces `'question'`
* De lo contrario, si el último carácter es `!`, entonces `'exclamation'`
* De lo contrario, `'normal'`

Solo se ejecutará uno de los bloques de código relacionados con toda la estructura `if`.
