
FizzBuzz es una de las tareas de entrevista más famosas para programadores principiantes. Se utiliza para comprobar la habilidad de trabajar con bucles y condiciones. Implementa una función `fizzbuzz()` que devuelva una cadena con los números del 1 a `$n`.

Las reglas:

- si un número es divisible por 3, se sustituye por la palabra `Fizz`,
- si un número es divisible por 5 — por la palabra `Buzz`,
- si es divisible por 3 y por 5 a la vez — por la palabra `FizzBuzz`.

Todos los elementos deben unirse con un espacio.

Esta tarea aparece a menudo en entrevistas de programación, por lo que es útil saber resolverla.

Ejemplo de llamada de la función:

```php
<?php

fizzbuzz(15);
// '1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz'
```

### Algoritmo

1. Declarar el elemento neutro de la agregación (una cadena vacía)
2. Usar un bucle con los números del 1 a `$n`
3. Comprobar cada número con las condiciones de división
4. Añadir el resultado de cada iteración al resultado final usando un espacio
