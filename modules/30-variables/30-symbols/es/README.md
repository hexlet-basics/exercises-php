En esta lección aprenderemos a obtener un carácter específico de una cadena. Por ejemplo, si un sitio web conoce el nombre y apellido del usuario, y en algún momento se requiere mostrar esta información en el formato `A. Ivanov`. En este caso, debemos tomar el primer carácter del nombre:

```php
<?php

$firstName = 'Alexander';

print_r($firstName[0]); // => A
```

Los corchetes con un número son un operador especial para extraer una cadena. Este número se llama **índice** y representa la posición del carácter dentro de la cadena.

Los índices comienzan desde cero en casi todos los lenguajes de programación. Para obtener el primer carácter, debemos especificar el índice `0`. El índice del último elemento es igual a la longitud de la cadena menos uno:

```php
<?php

$firstName = 'Alexander';

// La longitud de la cadena es 9, por lo tanto, el último índice es 8
print_r($firstName[8]);  // => r

// Pregunta de autoevaluación. ¿Qué imprimirá este código?
$magic = '\nyou';
print_r($magic[1]); // => ?
```

También es posible utilizar índices negativos. En este caso, se accede a los caracteres desde el final de la cadena. `-1` es el índice del último carácter, `-2` es el índice del penúltimo carácter, y así sucesivamente. A diferencia de la indexación directa, el conteo inverso comienza desde `-1`:

```php
<?php

$firstName = 'Alexander';

print_r($firstName[-1]); // => r
```

El índice puede ser no solo un número específico, sino también el valor de una variable. Aquí hay un ejemplo que dará el mismo resultado, mostrando el carácter `A` en la pantalla:

```php
<?php

$firstName = 'Alexander';
$index = 0;

print_r($firstName[$index]); // => A
```

Aquí, el índice dentro de los corchetes no está escrito como un número, sino como una variable.
