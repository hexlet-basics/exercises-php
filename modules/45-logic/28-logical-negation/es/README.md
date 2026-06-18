Junto con los operadores lógicos **Y** y **O**, a menudo se utiliza la operación "**negación**". La negación cambia el valor lógico al opuesto. En PHP, la negación se corresponde con el operador unario `!`:

```php
<?php

!true;  // false
!false; // true
```

Por ejemplo, si hay una función que verifica si un número es par, con la negación se puede realizar una verificación de imparidad:

```php
<?php

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

var_dump(isEven(10));  // => bool(true)
var_dump(!isEven(10)); // => bool(false)
```

En el ejemplo anterior, agregamos `!` a la izquierda de la llamada a la función y obtuvimos la acción opuesta.

La negación permite expresar las reglas previstas en el código sin escribir nuevas funciones. Si escribes `!!isEven(10)`, el código funcionará incluso en ese caso:

```php
<?php

var_dump(!!isEven(10)); // => bool(true)
```

En lógica, la doble negación es equivalente a la ausencia de negación:

```php
<?php

!!true;  // true
!!false; // false

var_dump(!!isEven(10)); // => bool(true)
var_dump(!!isEven(11)); // => bool(false)
```

`!` se puede combinar con `&&` y `||`. Entre los operadores lógicos tiene la mayor prioridad, por lo que se aplica primero:

```php
<?php

!true || true;  // (!true) || true   => false || true  => true
!true && false; // (!true) && false  => false && false => false
```

Los paréntesis cambian el orden de evaluación:

```php
<?php

!(true || true);  // !true  => false
!(true && false); // !false => true
```

Un ejemplo práctico: una función verifica si un conductor puede ponerse al volante: se necesitan licencia y sobriedad:

```php
<?php

function canDrive(bool $hasLicense, bool $isDrunk): bool
{
    return $hasLicense && !$isDrunk;
}

var_dump(canDrive(true, false));  // => bool(true)  (tiene licencia, sobrio)
var_dump(canDrive(true, true));   // => bool(false) (tiene licencia, pero ebrio)
var_dump(canDrive(false, false)); // => bool(false) (sin licencia)
```

Ahora sabes lo que significan los operadores **Y**, **O** y `!`. Con su ayuda podrás definir condiciones compuestas de dos o más expresiones lógicas.

## Leyes de De Morgan

Al trabajar con expresiones lógicas complejas, a veces es necesario invertirlas o reescribirlas en una forma equivalente que sea más fácil de leer. Para esto existen las **leyes de De Morgan**: dos reglas que describen cómo se distribuye la negación sobre una expresión compuesta:

```text
!(A && B)  es equivalente a  !A || !B
!(A || B)  es equivalente a  !A && !B
```

La primera ley: la negación de una conjunción es igual a la disyunción de las negaciones. Comprobemos:

```php
<?php

!(true && false); // !false => true
!true || !false;  // false || true => true
```

La segunda ley: la negación de una disyunción es igual a la conjunción de las negaciones:

```php
<?php

!(true || false); // !true => false
!true && !false;  // false && true => false
```

En la práctica, las leyes de De Morgan ayudan a simplificar condiciones. Por ejemplo, en lugar de `!($isAdmin || $isModerator)` puedes escribir `!$isAdmin && !$isModerator`, que se lee como "no es administrador y no es moderador".
