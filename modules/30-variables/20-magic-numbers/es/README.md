
Recordemos una de las lecciones anteriores:

```php
<?php

$cantidadEuros = 1000;
$cantidadDolares = $cantidadEuros * 1.25; // 1250
$cantidadRublos = $cantidadDolares * 60;  // 75000

print_r($cantidadRublos);
```

Desde el punto de vista del desarrollo profesional, este código "huele mal". Así es como se describe el código que no cumple con las llamadas mejores prácticas (best practices). Y la razón es la siguiente: en este momento, al ver los números `60` y `1.25`, es probable que te preguntes: "¿qué significan estos números?". ¡Imagínate lo que sucederá en un mes! ¿Y cómo lo entenderá un nuevo programador que no haya visto el código antes? En nuestro ejemplo, el contexto se recupera gracias a una buena nomenclatura, pero en la vida real el código es mucho más complicado, por lo que a menudo es imposible adivinar el significado de los números.

Estos números mágicos (magic numbers) son los que causan este "mal olor". Son números cuyo origen es imposible de entender sin un profundo conocimiento de lo que está sucediendo dentro de esa parte de código.

La solución es simple: basta con crear variables con nombres adecuados y todo encajará en su lugar.

```php
<?php

$dolaresPorEuro = 1.25;
$rublosPorDolar = 60;

$cantidadEuros = 1000;
$cantidadDolares = $cantidadEuros * $dolaresPorEuro;   // 1250
$cantidadRublos = $cantidadDolares * $rublosPorDolar; // 75000

print_r($cantidadRublos);
```

Presta atención a los siguientes detalles:

* Nomenclatura lowerCamelCase.
* Las dos nuevas variables están separadas de los cálculos posteriores por una línea en blanco. Estas variables tienen sentido incluso sin los cálculos, por lo que esta separación es apropiada y mejora la legibilidad.
* El código resultante es más largo que la versión anterior, pero está bien nombrado y estructurado. Esto ocurre a menudo y es normal, porque el código debe ser legible.
