PHP admite **declaraciones de tipos** (también conocidas como type hints): puedes indicar los tipos de los parámetros y del valor de retorno de una función. Los tipos de los parámetros se escriben antes del nombre del parámetro, y el tipo de retorno va después de la lista de parámetros, separado por dos puntos:

```php
<?php

function add(int $a, int $b): int
{
    return $a + $b;
}

print_r(add(2, 3)); // => 5
```

A diferencia de muchos lenguajes, PHP comprueba los tipos en tiempo de ejecución. Un valor incompatible provoca un `TypeError`, mientras que los valores compatibles se convierten automáticamente (`add('2', 3)` devuelve `5`).

En esta etapa, basta con los tipos simples: `int`, `float`, `string`, `bool`. Si una función no devuelve nada, el tipo de retorno es `void`:

```php
<?php

function printGreeting(string $name): void
{
    print_r("Hello, {$name}!");
}
```

Las declaraciones de tipos son opcionales, pero hacen el código más claro para las personas, los editores y las herramientas de análisis estático. Usarlas se considera una buena práctica.
