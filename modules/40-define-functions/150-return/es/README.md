Las funciones que definimos en la lección anterior terminaban su trabajo imprimiendo algunos datos en la pantalla. Tales funciones no son muy útiles, porque su resultado no se puede usar dentro del programa. En esta lección aprenderemos a escribir funciones que **devuelven valores**. Tales funciones responden a una pregunta y entregan el resultado de su trabajo, como si dijeran: «Toma, ya hice el cálculo».

Por ejemplo, una función puede devolver una cadena con texto procesado o un número calculado por una fórmula. El valor devuelto se puede usar más adelante. Se guarda en una variable, se pasa a otra función o se imprime en la pantalla.

Para que una función entregue un resultado, en ella se usa una palabra clave especial `return`. Esta finaliza la ejecución de la función e indica exactamente qué se debe devolver.

Aquí tienes un ejemplo de una función que convierte el texto a mayúsculas:

```php
<?php

function shout($name)
{
    return strtoupper($name);
}
```

Llamamos a `shout()`, le pasamos un nombre y obtenemos una cadena en mayúsculas. Esta cadena es el resultado de la función:

```php
<?php

$result = shout('hexlet');
print_r($result); // => HEXLET

$result2 = shout('code-basics');
print_r($result2); // => CODE-BASICS
```

A diferencia de `print_r()`, `return` no imprime nada. Simplemente devuelve un valor. La decisión sobre qué hacer con él la toma el código que llama.

Al llamar a la función `shout('hexlet')`, primero se evalúa la expresión `strtoupper($name)`. Esta devuelve la cadena `'HEXLET'`. Luego `return` entrega este valor hacia afuera, al lugar desde donde se llamó a la función. En nuestro caso, este valor se guarda en la variable `$result` y luego se imprime en la pantalla mediante `print_r()`.

¿Y qué devuelve una función que no tiene `return`? Comprobémoslo con la función de la lección anterior que solo imprime texto:

```php
<?php

function greeting()
{
    print_r('Hello, Hexlet!');
}

$message = greeting();
// Para ver null, hay que usar la función var_dump()
var_dump($message); // => NULL
```

Una función sin retorno siempre devuelve `null`, un valor especial que significa «no hay nada».

## Retorno de una expresión calculada

Las funciones no están obligadas a simplemente devolver un parámetro. Normalmente, en `return` se indica una **expresión** que primero se evalúa y luego el resultado se entrega hacia afuera.

```php
<?php

function fullName($first, $last)
{
    return ucfirst($first) . ' ' . ucfirst($last);
}
```

En este ejemplo, construimos el nombre completo a partir del nombre y el apellido. La función `ucfirst()` convierte en mayúscula la primera letra de una cadena. Primero se ejecutan ambas llamadas a `ucfirst()`, luego las cadenas se unen mediante `.`, y la cadena ya lista se devuelve:

```php
<?php

$name = fullName('aria', 'stark');
print_r($name); // => Aria Stark
```

También se puede devolver el valor de una variable. Aquí hay que guiarse por los principios de legibilidad del código:

```php
<?php

function greeting()
{
    $message = 'Hello, Hexlet!';
    return $message;
}
```

No devolvemos la variable en sí. Siempre se devuelve el valor que está contenido en esa variable.

## Funciones multilínea

A veces, dentro del cuerpo de la función hay que realizar varios pasos antes de obtener el resultado. En tales casos se escriben varias líneas de código, y al final se usa `return` para devolver el valor final.

Por ejemplo, escribamos una función que formatea un nombre: elimina los espacios de los bordes y convierte todas las letras a mayúsculas.

```php
<?php

function formatName($name)
{
    $clean = trim($name);
    $uppercased = strtoupper($clean);
    return $uppercased;
}
```

Primero quitamos los espacios con la ayuda de la función `trim()`, luego convertimos a mayúsculas con la ayuda de `strtoupper()` y devolvemos el valor final:

```php
<?php

print_r(formatName('  hexlet  ')); // => HEXLET
```

Código como este se encuentra en los programas reales constantemente. Por ejemplo, cuando un usuario se registra en un sitio, puede ingresar un correo con espacios de más o letras en distintos casos: `  SuppORT@hexlet.IO`. Antes de escribir tal correo en la base de datos, se prepara exactamente de la misma manera: se recortan los caracteres de espacio y se convierte a minúsculas.

## Código después de `return`

Cuando PHP llega a la instrucción `return`, la ejecución de la función se detiene. Todo lo que está escrito después de ella dentro de la función **no se ejecutará**:

```php
<?php

function greeting()
{
    return 'Hello, Hexlet!';
    print_r('Nunca me ejecutaré');
}
```

Por eso `return` siempre se escribe al final de la lógica. Sin embargo, puede haber muchos de estos finales dentro de una función. Trataremos esto con más detalle cuando lleguemos a las construcciones condicionales.

Incluso si una función devuelve datos, esto no la limita en lo que imprime. Además de devolver datos, también podemos imprimir:

```php
<?php

function greeting()
{
    print_r('Apareceré en la consola');
    return 'Hello, Hexlet!';
}

// Imprimirá el texto en la pantalla y devolverá el valor
$message = greeting();
```

Una pregunta de autocomprobación. ¿Qué devolverá la llamada a esta función?

```php
<?php

// Definición
function run()
{
    // Retorno
    return 5;
    return 10;
}

// Uso
run(); // => ?
```
