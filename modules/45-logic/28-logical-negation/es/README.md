Junto con la conjunción (Y) y la disyunción (O), a menudo se utiliza la operación "negación". La negación cambia el valor lógico al opuesto.

En programación, se corresponde con el operador unario `!`. Si hay una función que verifica si un número es par, se puede realizar una verificación de imparidad utilizando la negación:

```php
<?php

function esPar($numero)
{
    return $numero % 2 === 0;
}

esPar(10);  // true
!esPar(10); // false
// En lógica, la doble negación es similar a la ausencia de negación en absoluto
!!esPar(10); // true
```

Simplemente agregamos `!` antes de llamar a la función y obtenemos la acción opuesta. La negación es una herramienta poderosa que permite expresar reglas previstas de manera concisa en el código sin necesidad de escribir nuevas funciones.
