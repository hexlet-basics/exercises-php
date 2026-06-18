La agregación se aplica no solo a los números, sino también a las cadenas. Estos son problemas en los que la cadena se forma dinámicamente, es decir, no se sabe de antemano su tamaño ni qué contendrá.

Imagina una función que puede multiplicar una cadena, es decir, repetirla la cantidad de veces especificada:

```php
<?php

repeat('hexlet', 3); // 'hexlethexlethexlet'
```

El principio de funcionamiento de esta función es bastante simple: en un bucle, la cadena se "acumula" la cantidad de veces especificada:

```php
<?php

function repeat(string $text, int $times): string
{
    // El elemento neutro para las cadenas es una cadena vacía
    $result = '';
    $i = 1;

    while ($i <= $times) {
        // Agregamos la cadena al resultado cada vez
        $result = "{$result}{$text}";
        $i = $i + 1;
    }

    return $result;
}
```

Veamos la ejecución de este código paso a paso:

```php
<?php

// Para llamar a repeat('hexlet', 3);
$result = '';
$result = "{$result}hexlet"; // hexlet
$result = "{$result}hexlet"; // hexlethexlet
$result = "{$result}hexlet"; // hexlethexlethexlet
```

De forma visual, el proceso de acumulación de la cadena se ve así:

```text
repeat('hexlet', 3):

i=1: result = ''             . 'hexlet' = 'hexlet'
i=2: result = 'hexlet'       . 'hexlet' = 'hexlethexlet'
i=3: result = 'hexlethexlet' . 'hexlet' = 'hexlethexlethexlet'
                                            └── resultado
```

## Elemento neutro

Para que la acumulación funcione, se necesita un valor inicial. Para las cadenas, ese valor es la **cadena vacía** `''`.

Se llama elemento neutro porque no cambia nada durante la concatenación:

```php
<?php

print_r('' . 'abc');  // => abc
print_r('abc' . '');  // => abc
```

Por eso la cadena vacía siempre se usa como valor inicial al agregar cadenas.
