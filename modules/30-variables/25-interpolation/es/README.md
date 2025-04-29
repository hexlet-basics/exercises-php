Imaginemos que necesitamos crear un encabezado de correo electrónico a partir de dos variables y signos de puntuación. Podemos resolver esta tarea de la siguiente manera:

```php
<?php

$firstName = 'Joffrey';
$greeting = 'Hola';

print_r($greeting . ", " . $firstName . "!"); // => 'Hola, Joffrey!'
```

Este es un caso simple, pero incluso aquí se requiere un esfuerzo para ver qué cadena se obtendrá al final. Hay que prestar atención a las comillas y los espacios, y a primera vista es difícil entender qué y dónde comienza y termina.

Existe otra forma más conveniente: la **interpolación**. Así es como se ve:

```php
<?php

$firstName = 'Joffrey';
$greeting = 'Hola';

// Ten en cuenta que los delimitadores de la cadena son comillas dobles
// La interpolación no funciona con comillas simples
print_r("{$greeting}, {$firstName}!"); // => Hola, Joffrey!
```


En este ejemplo, creamos una sola cadena e insertamos las variables en el orden deseado utilizando llaves (`{}`). Creamos una plantilla donde se insertan los valores necesarios.

Ahora no tenemos que preocuparnos por las cadenas separadas para los signos de puntuación y los espacios. Estos caracteres están escritos en la cadena de la plantilla.

En una sola cadena se pueden hacer tantos bloques con llaves como se desee. La interpolación solo funciona con cadenas entre comillas dobles.

En casi todos los lenguajes, la interpolación es preferible a la concatenación para unir cadenas. La cadena resultante está concatenada y dentro de ella se pueden ver claramente los espacios y otros caracteres.
