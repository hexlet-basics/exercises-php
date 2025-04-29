Los bucles no solo son útiles para trabajar con números, sino también para trabajar con cadenas de caracteres, gracias a la posibilidad de acceder a un carácter específico mediante su índice. A continuación se muestra un ejemplo de código que imprime las letras de cada palabra en líneas separadas:

```php
<?php

function imprimirNombrePorSimbolo($nombre)
{
    $i = 0;
    // Esta condición se evaluará hasta el final de la cadena,
    // incluyendo el último carácter
    // Su índice es `longitud de la cadena - 1`
    while ($i < strlen($nombre)) {
        // Accedemos al carácter mediante su índice
        print_r("$nombre[$i]\n");
        $i = $i + 1;
    }
}

$nombre = 'Arya';
imprimirNombrePorSimbolo($nombre);
// => 'A'
// => 'r'
// => 'y'
// => 'a'
```


Lo más importante en este código es establecer la condición correcta en el `while`. Esto se puede hacer de dos formas:

* `$i < strlen($nombre)`
* `$i <= strlen($nombre) - 1`

Ambas formas conducen al mismo resultado.
