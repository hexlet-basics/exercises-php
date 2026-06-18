La función `getTypeOfSentence()` solo distingue entre oraciones interrogativas y oraciones normales. Agreguémosle soporte para oraciones exclamativas:

```php
<?php

function getTypeOfSentence(string $sentence): string
{
    $lastChar = $sentence[-1];

    if ($lastChar === '?') {
        $sentenceType = 'question';
    }

    if ($lastChar === '!') {
        $sentenceType = 'exclamation';
    } else {
        $sentenceType = 'normal';
    }

    return "Sentence is {$sentenceType}";
}

print_r(getTypeOfSentence('Who?') . "\n"); // => Sentence is normal
print_r(getTypeOfSentence('No') . "\n");   // => Sentence is normal
print_r(getTypeOfSentence('No!') . "\n");  // => Sentence is exclamation
```

Agregamos una comprobación de oraciones exclamativas (_exclamation_ se traduce como «exclamación»). Técnicamente esta función funciona, pero trata las oraciones interrogativas de forma incorrecta. Además, tiene problemas desde el punto de vista de la semántica. El signo de exclamación se comprueba en cualquier caso, incluso si ya se encontró un signo de interrogación. La rama `else` está descrita para la segunda condición, pero no para la primera. Por eso una oración interrogativa se vuelve `normal`.

Para corregir la situación, usemos otra posibilidad de la construcción condicional:

```php
<?php

function getTypeOfSentence(string $sentence): string
{
    $lastChar = $sentence[-1];

    if ($lastChar === '?') {
        $sentenceType = 'question';
    } elseif ($lastChar === '!') {
        $sentenceType = 'exclamation';
    } else {
        $sentenceType = 'normal';
    }

    return "Sentence is {$sentenceType}";
}

print_r(getTypeOfSentence('Who?') . "\n"); // => Sentence is question
print_r(getTypeOfSentence('No') . "\n");   // => Sentence is normal
print_r(getTypeOfSentence('No!') . "\n");  // => Sentence is exclamation
```

Ahora todas las condiciones se han alineado en una sola construcción. La palabra clave `elseif` significa «si la condición anterior no se cumple, pero la actual sí».

```text
  ┌─────────────────┐
  │ ¿condición 1?   │
  └────┬────────┬───┘
 true │        │ false
       ↓        ↓
┌──────────┐  ┌─────────────────┐
│ cuerpo if│  │ ¿condición 2?   │
└──────────┘  └────┬────────┬───┘
              true │        │ false
                    ↓        ↓
        ┌─────────────┐ ┌──────────┐
        │cuerpo elseif│ │cuerpo else│
        └─────────────┘ └──────────┘
```

La lógica de la función está organizada así. Si el último carácter es `?`, se devuelve `'question'`. Si el último carácter es `!`, se devuelve `'exclamation'`. En todos los demás casos se devuelve `'normal'`.

Se ejecutará solo uno de los bloques de código que pertenece a toda la construcción `if`.
