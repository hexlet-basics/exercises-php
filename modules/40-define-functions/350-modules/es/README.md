Mientras un programa es pequeño, todo el código puede guardarse en un solo archivo. Este enfoque es cómodo para ejemplos simples y tareas pequeñas. Pero con el tiempo el programa empieza a crecer. Cuando hay mucho código, orientarse en un solo archivo se vuelve difícil. Mientras tanto, las aplicaciones reales constan de decenas de miles de líneas (como mínimo) y cientos de archivos.

Para dividir un programa en partes lógicas separadas, el código se reparte entre archivos. En muchos lenguajes esos archivos se llaman módulos. En PHP un módulo es un archivo común con código y la extensión `.php`. Y el lenguaje ofrece un mecanismo para acceder a funciones y constantes de otros archivos — la inclusión de archivos.

## Cómo incluir un archivo

La instrucción `require` incluye el archivo indicado y hace que su contenido esté disponible:

```php
<?php
// helpers.php

function sayHi(): void
{
    print_r('Hi!');
}
```

```php
<?php
// Solution.php

require 'helpers.php';

sayHi(); // => Hi!
```

Después de la inclusión, todas las funciones del archivo `helpers.php` están disponibles como si hubieran sido definidas directamente en el archivo actual.

Por cierto, ya has visto este mecanismo en acción. Las pruebas automatizadas de este curso incluyen el archivo con tu solución mediante la línea `require 'Solution.php';` — y después de eso pueden llamar a las funciones que definiste.

## require, include y require_once

`require` tiene un gemelo — la instrucción `include`. La diferencia se manifiesta cuando el archivo incluido no se encuentra: `include` mostrará una advertencia y el programa continuará su ejecución, mientras que `require` detendrá la ejecución con un error. Si el programa no tiene sentido sin el código incluido, se usa `require`.

Hay también una tercera opción — `require_once`. Incluye un archivo solo una vez, incluso si la instrucción aparece varias veces en el programa. Esto es importante para los archivos con funciones: redefinir una función con el mismo nombre provoca un error.

## Las funciones integradas están disponibles sin inclusión

La biblioteca estándar de PHP está organizada de forma más simple que en muchos otros lenguajes: las funciones integradas están disponibles en cualquier lugar del programa de inmediato, sin necesidad de inclusión alguna. Por ejemplo, las funciones de redondeo: `floor()` redondea un número hacia abajo hasta el entero más cercano, y `ceil()` redondea hacia arriba:

```php
<?php

print_r(floor(7.9)); // => 7
print_r(ceil(7.1));  // => 8
print_r(ceil(7.0));  // => 7
```

La diferencia se nota cuando el número no es entero. `floor(7.9)` da 7, no 8, porque 7 es el entero más cercano por debajo.

Las funciones integradas, por supuesto, también están disponibles dentro del cuerpo de tus propias funciones:

```php
<?php

// Calcula la cantidad de viajes necesarios para transportar todos los objetos
function tripsNeeded(int $items, int $capacity): int
{
    return (int) ceil($items / $capacity);
}

print_r(tripsNeeded(10, 3)); // => 4
```

Fíjate: `ceil()` devuelve un número de tipo `float`, por eso el resultado se convierte a `int` — tal como hicimos en la lección sobre la conversión de tipos.

## Conflictos de nombres

En programas grandes, distintas partes del código pueden contener funciones con los mismos nombres. En PHP no se pueden definir dos funciones con el mismo nombre en un mismo espacio — el programa terminará con un error `Cannot redeclare function`.

Para combatir los conflictos de nombres, en PHP existen los **espacios de nombres** (namespaces). Los has visto al principio de cada ejercicio de este curso — la línea `namespace HexletBasics\...;` es precisamente la que declara un espacio de nombres. Gracias a ellos podemos crear tantas funciones con los mismos nombres como queramos, lo principal es que se encuentren en espacios distintos. Esto funciona incluso con las funciones integradas:

```php
<?php

namespace App\Custom;

function floor(float $number): string
{
    return 'custom floor';
}

print_r(floor(3.7));  // => custom floor
print_r(\floor(3.7)); // => 3
```

Dentro del espacio `App\Custom` el nombre `floor` hace referencia a nuestra función. La función integrada no ha desaparecido — está disponible por su nombre completo `\floor()`, donde la barra invertida significa el espacio global. Esto es especialmente importante al usar bibliotecas de terceros, porque diferentes desarrolladores pueden elegir los mismos nombres para sus funciones. Los espacios de nombres se estudian en detalle más adelante, en Hexlet.
