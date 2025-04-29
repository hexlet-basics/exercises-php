Los datos de un programa se almacenan en la memoria de la computadora como una secuencia de ceros y unos. En este nivel, no hay diferencia entre cadenas de texto, números o valores booleanos. Todo se ve igual en la memoria. La diferencia aparece solo en la interpretación.

El programa sabe que dentro de una variable se almacena una cadena de texto, por lo que toma los ceros y unos y los pasa a través de una tabla de códigos. En esta tabla se indica a qué número corresponde cada letra. Como resultado, el programador ve una cadena de texto. En esta lección discutiremos cómo funcionan estas tablas de códigos.

Al principio, solo existía el [ASCII](https://es.wikipedia.org/wiki/ASCII) - un conjunto de caracteres basado en el alfabeto inglés.

En este conjunto de caracteres, cada símbolo se representa con 7 bits, lo que da un total de 128 caracteres:

* 95 caracteres imprimibles, incluyendo letras mayúsculas y minúsculas, números y signos de puntuación.
* 33 caracteres no imprimibles (códigos de control).

La mayoría de los caracteres no imprimibles ya no son relevantes, pero algunos todavía se utilizan, como el salto de línea `\n`.

Los caracteres en ASCII se pueden codificar. Por ejemplo, el carácter `i` en minúscula corresponde a:

* El número `1101001` en sistema binario.
* El número `105` en sistema decimal.

Al principio todo estaba bien, pero con la proliferación de las computadoras surgió la necesidad de otros alfabetos. Cada país resolvió este problema creando su propio conjunto de caracteres, la mayoría de los cuales eran compatibles con ASCII:

* Los primeros 128 caracteres eran idénticos a ASCII.
* Los otros 128 caracteres se llenaban con el alfabeto local.

Como resultado, estos conjuntos de caracteres tenían 256 caracteres, lo que equivale a 2 a la 8va potencia.

Estos conjuntos de caracteres eran de un solo byte, lo que significa que se necesitaba un byte para almacenar un solo carácter. Pero de repente surgió un problema: al intentar abrir un archivo en un editor con una codificación diferente, aparecían caracteres ilegibles, conocidos como [«garabatos»](https://es.wikipedia.org/wiki/Garabatos):

> Øèðîêàÿ ýëåêòðèôèêàöèÿ þæíûõ ãóáåðíèé äàñò ìîùíûé òîë÷îê ïîäú¸ìó ñåëüñêîãî õîçÿéñòâà

Estos caracteres aparecen porque el mismo código en diferentes codificaciones corresponde a caracteres completamente diferentes, excepto los primeros 128. Por lo tanto, el texto que utiliza letras en inglés siempre se lee correctamente, pero en otros casos, depende de la suerte. La situación se complicaba aún más porque incluso dentro de un solo alfabeto se creaban múltiples codificaciones diferentes, como Windows-1252, KOI8-R, CP 866, ISO 8859-5.

En ese momento, en los lenguajes de programación, todas las funciones para trabajar con cadenas de texto se creaban asumiendo que un carácter era igual a un byte. Al menos, esta propiedad era común a todas las codificaciones.

Las diferentes codificaciones se convirtieron en la causa de problemas constantes en la interacción entre personas y programas. Esta problemática se agravó especialmente con el desarrollo de Internet. Esta situación no podía continuar indefinidamente, y finalmente se creó el estándar **Unicode**.

Actualmente, Unicode contiene más de 100,000 caracteres y abarca todos los idiomas existentes, incluso los muertos. El estándar Unicode no es una codificación y no dice nada sobre cómo se deben almacenar los caracteres en la memoria, solo establece la relación entre un carácter y un número.

La forma específica de codificar Unicode se determina mediante las codificaciones correspondientes, entre las que se encuentran UTF-8, UTF-16 y algunas otras. En estas codificaciones, un solo byte ya no es suficiente para almacenar un carácter, se necesitan más bytes. UTF-8 se comporta de manera más inteligente: utiliza un byte para los caracteres del alfabeto inglés y algunos otros, y dos bytes para otros alfabetos.

Después de muchos años de popularización de Unicode, ocurrió un milagro y ahora la gran mayoría del software utiliza UTF-8. Este proceso fue doloroso y tuvo diferentes efectos en los lenguajes de programación. Por ejemplo, en PHP, las funciones estándar no admiten codificaciones multibyte:

```php
<?php

echo strlen('Hello!'); // => 6
```


Los lenguajes se dividieron en dos campos. Algunos lenguajes incorporaron soporte para codificaciones multibyte en las funciones existentes, por lo que el cambio a UTF-8 no afectó el proceso de programación. Entre estos lenguajes se encuentran Java, Ruby, JavaScript.

Sin embargo, PHP siguió su propio camino. Para trabajar con codificaciones multibyte, se agregó una [extensión separada para trabajar con cadenas multibyte](https://php.net/manual/es/book.mbstring.php) al lenguaje. En su mayoría, esta extensión agrega muchas funciones para trabajar con cadenas, con la única diferencia de que cada función tiene el prefijo `mb_` (_multibyte_):

```php
<?php

echo mb_strlen('Hello!'); // => 6
```


Sin embargo, no existe una alternativa adecuada para obtener un carácter específico en una cadena por su índice. Esta tarea se debe realizar utilizando la función `mb_substr()`:

```php
<?php

$str = 'Привет';
$symbol = mb_substr($str, 2, 1); // и
```
