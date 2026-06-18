Mira la función de abajo. Determina el tipo de una oración por su último carácter: si la oración termina con un signo de interrogación, la función devuelve `Sentence is question`, de lo contrario devuelve `Sentence is normal`:

```php
<?php

function getTypeOfSentence(string $sentence): string
{
    $lastChar = $sentence[-1];

    if ($lastChar === '?') {
        $sentenceType = 'question';
    } else {
        $sentenceType = 'normal';
    }

    return "Sentence is {$sentenceType}";
}

print_r(getTypeOfSentence('Hodor') . "\n");  // => Sentence is normal
print_r(getTypeOfSentence('Hodor?') . "\n"); // => Sentence is question
```

Agregamos `else` y un nuevo bloque entre llaves. Se ejecuta si la condición en `if` resulta falsa. Además, dentro del bloque `else` se pueden anidar otras condiciones `if`. Else se traduce como «de lo contrario», «en el otro caso».

```text
      ┌───────────┐
      │ ¿condición?│
      └─────┬─────┘
 true │           │ false
      ↓           ↓
┌──────────┐ ┌──────────┐
│ cuerpo if│ │cuerpo else│
└──────────┘ └──────────┘
```

Un ejemplo de bloques anidados:

```php
<?php

$number = 10;

if ($number > 10) {
    print_r('Number is greater than 10');
} else {
    if ($number === 10) {
        print_r('Number is exactly 10');
    } else {
        print_r('Number is less than 10');
    }
}
```

Hay dos formas de estructurar una construcción `if-else`. Usando la negación `!==` se puede cambiar el orden de los bloques:

```php
<?php

function getTypeOfSentence(string $sentence): string
{
    $lastChar = $sentence[-1];

    if ($lastChar !== '?') {
        $sentenceType = 'normal';
    } else {
        $sentenceType = 'question';
    }

    return "Sentence is {$sentenceType}";
}
```

Para que la construcción sea más fácil de estructurar, intenta elegir una comprobación sin negaciones y adapta el contenido de los bloques a ella.

El ejemplo del uso de `else` muestra lo importante que es controlar a qué `if` pertenece cada bloque:

```php
<?php

// Incorrecto
function checkNumber(int $number): void
{
    if ($number > 0) {
        print_r("Number is positive\n");
    }

    if ($number > 10) {
        print_r("Number is greater than 10\n");
    } else {
        print_r("Number is not positive\n");
    }
}

checkNumber(3);
// => Number is positive
// => Number is not positive
```

En el ejemplo de arriba, olvidamos anidar el segundo `if` dentro del primero, por lo que el `else` ahora pertenece al segundo `if`. El programa informa que el número es a la vez positivo y no positivo.

```php
<?php

// Correcto
function checkNumber(int $number): void
{
    if ($number > 0) {
        print_r("Number is positive\n");

        if ($number > 10) {
            print_r("Number is greater than 10\n");
        }
    } else {
        print_r("Number is not positive\n");
    }
}

checkNumber(3);
// => Number is positive
```

Ahora el segundo `if` está anidado dentro del primero, y el `else` está al mismo nivel que el primer `if` y se contrapone a él.
