A partir de PHP 8, los argumentos se pueden pasar por el nombre del parámetro. El nombre se escribe sin `$`, seguido de dos puntos:

```php
<?php

function repeat($text, $times)
{
    return str_repeat($text, $times);
}

repeat('Hi', 3);              // llamada posicional
repeat(text: 'Hi', times: 3); // llamada con nombre
repeat(times: 3, text: 'Hi'); // el orden no importa
repeat('Hi', times: 3);       // los posicionales van primero
```

Los argumentos con nombre destacan cuando una función tiene varios parámetros opcionales y solo necesitas cambiar algunos:

```php
<?php

// Sin argumentos con nombre: number_format(1234.567, 0, '.', ' ')
number_format(1234.567, thousands_separator: ' '); // => 1 235
```
