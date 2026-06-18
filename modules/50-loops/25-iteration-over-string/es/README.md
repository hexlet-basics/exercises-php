Los bucles son útiles no solo para procesar números, sino también para trabajar con cadenas de caracteres, gracias a la posibilidad de acceder a un carácter específico mediante su índice. A continuación se muestra un ejemplo de código que imprime las letras de cada palabra en líneas separadas:

```php
<?php

function printNameBySymbol(string $name): void
{
    $i = 0;
    // Esta comprobación se ejecuta hasta el final de la cadena,
    // incluyendo el último carácter
    // Su índice es `longitud de la cadena - 1`
    while ($i < strlen($name)) {
        // Accedemos al carácter mediante su índice
        print_r("$name[$i]\n");
        $i = $i + 1;
    }
}

$name = 'Arya';
printNameBySymbol($name);
// => 'A'
// => 'r'
// => 'y'
// => 'a'
```

El bucle recorre cada carácter de la cadena uno por uno:

```text
'Arya'
 │ │ │ │
 A r y a
 ↓ ↓ ↓ ↓
cada carácter se procesa por turno
```

Lo más importante en este código es establecer la condición correcta en el `while`. Esto se puede hacer de dos formas a la vez:

* `$i < strlen($name)`
* `$i <= strlen($name) - 1`

Ambas formas conducen al mismo resultado.

## Invertir una cadena

En lugar de imprimir, se puede construir una nueva cadena. Por ejemplo, escribamos una función que invierte una cadena:

```php
<?php

function reverseString(string $text): string
{
    $result = '';
    $i = strlen($text) - 1;

    while ($i >= 0) {
        $result = $result . $text[$i];
        $i = $i - 1;
    }

    return $result;
}

print_r(reverseString('Arya') . "\n");   // => ayrA
print_r(reverseString('hexlet') . "\n"); // => telxeh
```

La variable `$result` se inicializa con una cadena vacía como elemento neutro para la concatenación. El bucle comienza en el último índice (`strlen($text) - 1`), avanza hacia cero y termina cuando el índice se vuelve menor que cero. En cada paso se añade el carácter actual al resultado. Como resultado, la cadena se construye en orden inverso.
