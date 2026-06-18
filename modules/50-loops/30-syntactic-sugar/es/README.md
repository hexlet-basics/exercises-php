En programación, a menudo aparecen construcciones repetitivas. En PHP, como en muchos otros lenguajes, existe la posibilidad de escribirlas de forma más corta. Estas simplificaciones se llaman **azúcar sintáctico**, porque hacen que el proceso de escribir código sea un poco más fácil y agradable, "endulzándolo" :)

## Formas abreviadas de asignación

A menudo se necesita cambiar el valor de una variable sumando o restando algo, o multiplicando o dividiendo por un número. La versión básica se ve así:

```php
<?php

$index = $index + 1;
$count = $count * 2;
$total = $total - 5;
$price = $price / 3;
```

PHP permite escribir esto de forma más corta mediante operadores combinados:

```php
<?php

$index += 1; // lo mismo que $index = $index + 1
$count *= 2; // lo mismo que $count = $count * 2
$total -= 5; // lo mismo que $total = $total - 5
$price /= 3; // lo mismo que $price = $price / 3
```

Es importante entender que las diferencias son únicamente en la forma de escribirlo. El intérprete convierte la construcción abreviada en la forma expandida.

En los bucles, estas abreviaciones aparecen con especial frecuencia. En ellos solemos cambiar un contador y acumular un resultado:

```php
<?php

$sum = 0;
$index = 1;

while ($index <= 5) {
    $sum += $index;   // lo mismo que $sum = $sum + $index
    $index += 1;      // lo mismo que $index = $index + 1
}

print_r($sum); // => 15
```

Sin las abreviaciones, el cuerpo del bucle sería más largo:

```php
<?php

while ($index <= 5) {
    $sum = $sum + $index;
    $index = $index + 1;
}
```

## Otras operaciones

Esta notación funciona con números y con otros tipos de datos.

Para las cadenas se utiliza el operador de concatenación:

```php
<?php

$text = 'Hello';
$text .= ' World'; // lo mismo que $text = $text . ' World'
```

## Abreviaciones soportadas

Existe una forma abreviada para casi todos los operadores: `+=`, `-=`, `*=`, `/=`, `%=`, `**=`, `.=`. Todas funcionan según el mismo principio: toman el valor actual de la variable, aplican la operación y guardan el resultado en la misma variable.
