Los programas que escribimos se vuelven cada vez más complejos y extensos. Aún están muy lejos de ser programas reales, donde la cantidad de líneas de código se mide en decenas y cientos de miles. La complejidad actual puede ser desafiante incluso para personas sin experiencia. A partir de esta lección, nos adentraremos en uno de los temas básicos más complejos de la programación: los **ciclos**.

Todos los programas de aplicación tienen objetivos pragmáticos. Ayudan a gestionar empleados y finanzas, y también entretienen. A pesar de las diferencias, todos estos programas ejecutan algoritmos incorporados en ellos, que son similares entre sí. ¿Qué es un algoritmo? Un **algoritmo** es una secuencia de acciones o instrucciones que nos lleva a un resultado esperado. Esta descripción se aplica a cualquier programa, pero los algoritmos suelen ser algo más específicos.

Imagina que tenemos un libro y queremos encontrar una frase específica en su interior. Recordamos la frase, pero no sabemos en qué página está. ¿Cómo encontramos la página que buscamos? La forma más sencilla y lenta es revisar las páginas secuencialmente hasta encontrar la frase deseada. En el peor de los casos, tendríamos que revisar todas las páginas, pero de todas formas obtendríamos el resultado. Este proceso se llama **algoritmo**. Incluye la búsqueda de páginas y comprobaciones lógicas para determinar si encontramos la frase o no.

No sabemos de antemano cuántas páginas tendremos que revisar, pero el proceso de revisión se repite de la misma manera una y otra vez. Para realizar acciones repetitivas como esta, necesitamos **ciclos**. Cada repetición se llama **iteración**.

Supongamos que queremos escribir una función que imprima en pantalla todos los números desde uno hasta un número especificado (a través de argumentos):

```php
<?php

printNumbers(3);
// => 1
// => 2
// => 3
```

No es posible implementar esta función con los conocimientos que ya hemos adquirido, ya que no conocemos de antemano la cantidad de impresiones en pantalla. Pero con los ciclos, esto no es un problema:

```php
<?php

function printNumbers($lastNumber)
{
    // La variable i es una abreviatura de "index" (índice)
    // Se utiliza por convención en muchos lenguajes
    // como contador del ciclo
    $i = 1;

    while ($i <= $lastNumber) {
        print_r($i);
        print_r("\n");
        $i = $i + 1;
    }
    print_r('finished!');
}

printNumbers(3);
// => 1
// => 2
// => 3
// => finished!
```

https://replit.com/@hexlet/php-basics-while

En el código de la función se utiliza el ciclo `while`. Está compuesto por tres elementos:

* La palabra clave `while` - a pesar de su similitud con la llamada a funciones, no es una llamada a función.
* El predicado: una condición que se especifica entre paréntesis después de `while` y se evalúa en cada iteración.
* El cuerpo del ciclo: un bloque de código entre llaves.

Esta construcción se lee de la siguiente manera: "haz lo que se especifica en el cuerpo del ciclo mientras la condición `$i <= $lastNumber` sea verdadera".

Veamos cómo funciona este código para la llamada `printNumbers(3)`:

```php
<?php

// Se inicializa la variable i
$i = 1;

// El predicado devuelve true, por lo que se ejecuta el cuerpo del ciclo
while (1 <= 3)
// print_r(1);
// $i = 1 + 1;

// Se termina el cuerpo del ciclo, por lo que se vuelve al principio
while (2 <= 3)
// print_r(2);
// $i = 2 + 1;

// Se termina el cuerpo del ciclo, por lo que se vuelve al principio
while (3 <= 3)
// print_r(3);
// $i = 3 + 1;

// El predicado devuelve false, por lo que la ejecución continúa después del ciclo
while (4 <= 3)

// print_r('finished!');
// En este punto, i es igual a 4, pero ya no lo necesitamos
// La función finaliza
```

Lo más importante en un ciclo es su finalización (salida del ciclo). El proceso que genera el ciclo debe detenerse en última instancia. La responsabilidad de detenerlo recae completamente en el programador.

Por lo general, la tarea se reduce a introducir una variable llamada **contador del ciclo**. Primero, se inicializa el contador, es decir, se le asigna un valor inicial. En nuestro ejemplo, esto se hace con la instrucción `$i = 1`, que se ejecuta antes de entrar al ciclo. Luego, en la condición del ciclo, se verifica si el contador ha alcanzado su valor límite. Y finalmente, el contador cambia su valor `$i = $i + 1`.

Los principiantes cometen la mayoría de los errores en este punto. Por ejemplo, olvidar accidentalmente incrementar el contador o realizar una comprobación incorrecta en el predicado puede provocar un **bucle infinito**. Esta es una situación en la que el ciclo se ejecuta infinitamente y el programa nunca se detiene.

En ese caso, es necesario terminarlo forzosamente:

```php
<?php

function printNumbers($lastNumber)
{
    $i = 1;

    // Este ciclo nunca se detendrá
    // Siempre imprimirá el mismo valor
    while ($i <= $lastNumber) {
        print_r($i);
    }
    print_r('finished!');
}
```

En algunos casos, los bucles infinitos son útiles. No los estamos considerando aquí, pero es útil saber cómo se ve este tipo de código:

```php
<?php

while (true) {
    // Hacer algo
}
```

En resumen, ¿cuándo se necesitan los ciclos y cuándo se pueden evitar? Es físicamente imposible evitar los ciclos cuando el algoritmo para resolver un problema requiere la repetición de ciertas acciones y la cantidad de estas operaciones es desconocida de antemano, como en nuestro ejemplo del libro.
