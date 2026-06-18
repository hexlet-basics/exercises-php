Además de las operaciones aritméticas, en matemáticas existen operaciones de comparación, como `5 > 4` o `3 < 1`. También existen en programación. Las comparaciones se usan a menudo en tareas reales relacionadas con números. Por ejemplo, cuando realizamos una compra en una tienda en línea, el sistema comprueba si el usuario tiene suficiente dinero en su cuenta para pagar el producto. Si el saldo de la cuenta es mayor o igual que el precio del producto, el pedido se confirma. Si no hay fondos suficientes, aparece el mensaje correspondiente.

## Comparación en programación

Comencemos con un ejemplo en el que se comparan dos números:

```php
<?php

var_dump(5 > 4); // => bool(true)
var_dump(4 > 4); // => bool(false)
```

El resultado de una comparación es un valor de tipo `bool`. Este tipo tiene solo dos opciones posibles: `true` y `false`. Son valores especiales del lenguaje. Se pueden usar directamente:

```php
<?php

var_dump(true);  // => bool(true)
var_dump(false); // => bool(false)
```

Fíjate en la nueva función `var_dump()`. La conocida `print_r()` no es adecuada para mostrar valores lógicos: imprime `true` como `1` y `false` como una cadena vacía. La función `var_dump()` muestra tanto el tipo como el valor, por eso se usa para los valores de tipo `bool`.

En la práctica, los valores `true` y `false` rara vez se usan directamente, pero sobre ellos se construye la lógica del comportamiento del programa. Nos encontramos con esto literalmente todos los días, cuando introducimos códigos PIN y contraseñas, cuando realizamos acciones cuyos resultados pueden ser distintos. Todos esos resultados están descritos dentro del programa en forma de expresiones condicionales. El programa razona más o menos así: *si es de una manera, haz una cosa; si es de otra manera, haz otra*.

En PHP están disponibles las siguientes operaciones de comparación:

* `<` y `<=` significan «menor que» y «menor o igual que»
* `>` y `>=` significan «mayor que» y «mayor o igual que»
* `==` y `!=` significan «igual que» y «distinto que»
* `===` y `!==` significan «estrictamente igual que» y «estrictamente distinto que»

Los lenguajes de programación adoptaron todas las operaciones de comparación matemáticas sin cambios, excepto los operadores de igualdad y desigualdad. En matemáticas se usa el signo igual `=` para esto, pero en programación el símbolo `=` se usa, la mayoría de las veces, para asignar valores a las variables. Por eso, en PHP se compara con `==` y `===`.

¿En qué se diferencian estos dos operadores? Recuerda la lección sobre la tipificación débil: PHP intenta convertir los tipos automáticamente. El operador `==` compara los valores después de esa conversión, por lo que, por ejemplo, `0 == '0'` resulta ser verdadero. El operador `===` compara de forma estricta, sin conversión: los valores son iguales solo si coinciden tanto el tipo como el valor en sí. Las conversiones implícitas provocan errores difíciles de detectar, por eso en PHP se acostumbra usar los operadores estrictos `===` y `!==`, y eso es lo que haremos en este curso.

Algunos ejemplos:

```php
<?php

var_dump(5 >= 3);  // => bool(true)
var_dump(7 < 0);   // => bool(false)
var_dump(5 > 5);   // => bool(false)
var_dump(5 >= 5);  // => bool(true)
var_dump(2 === 5); // => bool(false)
var_dump(2 !== 5); // => bool(true)
```

Cuando en una comparación se usan valores concretos, esa operación parece carecer de sentido: ya conocemos su resultado y siempre es el mismo, porque si 3 es mayor que 2, eso no cambia. Pero todo cambia cuando los valores pueden cambiar. Intentemos escribir una función simple que tome como entrada la edad de un niño y determine si es un bebé. Se consideran bebés los niños menores de dos años (el dos no se incluye).

```php
<?php

function isInfant(int $age): bool
{
    return $age < 2;
}

var_dump(isInfant(3)); // => bool(false)
var_dump(isInfant(2)); // => bool(false)
var_dump(isInfant(1)); // => bool(true)
var_dump(isInfant(0)); // => bool(true)
```

Cuando las funciones devuelven el resultado de una comparación, normalmente responden a la pregunta «sí» o «no». Estas funciones se llaman **predicados**. Es fácil reconocerlas porque devuelven un valor lógico `true` o `false`. A menudo su nombre contiene una pregunta o una afirmación que se puede verificar. En PHP, los predicados suelen empezar con el prefijo `is`, `has` o `can`, pero no se limitan a estas palabras. Ejemplos:

* `isInfant()` — «¿es un bebé?»
* `hasChildren()` — «¿tiene hijos?»
* `isEmpty()` — «¿está vacío?»
* `hasErrors()` — «¿hay errores?»

Aquí tienes una función que comprueba si un número es negativo:

```php
<?php

// Comprobamos si el número es menor que cero
function isNegative(int $number): bool
{
    return $number < 0;
}

var_dump(isNegative(-5)); // => bool(true)
var_dump(isNegative(7));  // => bool(false)
```
