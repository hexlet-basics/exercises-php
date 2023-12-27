**Operaciones lógicas** son expresiones, por lo tanto, se pueden combinar con otras expresiones. Por ejemplo, queremos verificar si un número es par, es decir, si es divisible por dos. En programación, se utiliza el siguiente enfoque: se verifica el residuo de la división por dos:

* si el residuo es `0` - el número es par
* si el residuo no es `0` - el número es impar

El residuo de la división es un concepto simple pero importante en aritmética, álgebra, teoría de números y criptografía. Se trata de dividir un número en grupos iguales y si algo queda al final, eso es el residuo de la división.

Dividimos caramelos entre personas:

* 7 caramelos, 2 personas: 2 x 3 + residuo 1 - 7 no es divisible por 2
* 21 caramelos, 3 personas: 3 x 7 + residuo 0 - 21 es divisible por 3
* 19 caramelos, 5 personas: 5 x 3 + residuo 4 - 19 no es divisible por 5

El operador `%` calcula el **residuo de la división**:

* `7 % 2` → `1`
* `21 % 3` → `0`
* `19 % 5` → `4`

Usando esto, escribiremos una función para verificar si un número es par:

```php
<?php

function isEven($number)
{
    return $number % 2 === 0;
}

isEven(10); // true
isEven(3);  // false
```

En una sola expresión, hemos combinado el operador lógico de igualdad `===` y el operador aritmético `%`.

Las operaciones aritméticas tienen mayor prioridad que las operaciones lógicas. Esto significa que primero se calcula la expresión aritmética `$number % 2` y luego el resultado se utiliza en la comparación lógica.

Esto se puede interpretar de la siguiente manera:

> "Calcular el residuo de la división del número `$number` por 2 y verificar si el residuo es igual a cero; luego devolver el resultado de la comparación de igualdad"*

---

*Recordemos cómo extraer caracteres de una cadena utilizando corchetes:*

```php
<?php

$firstName = 'Alexander';

$firstName[0]; // A
```
