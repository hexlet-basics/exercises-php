Imagina que tenemos una cadena de texto y queremos poner todas sus letras en mayúsculas. PHP tiene una función integrada para esto, `strtoupper()`:

```php
<?php

$firstName = 'Alexander';
print_r(strtoupper($firstName)); // => ALEXANDER
```

Puede parecer que la función cambió nuestra cadena. Comprobémoslo:

```php
<?php

print_r($firstName); // => Alexander
```

La variable quedó igual. La función `strtoupper()` no cambia la cadena original: devuelve una **nueva** cadena formada por letras mayúsculas. Así funcionan todas las funciones para trabajar con cadenas en PHP: el valor en sí no se puede cambiar después de crearlo. Los programadores dicen que tales valores son **inmutables**.

## ¿Por qué los valores son inmutables?

Los valores primitivos en PHP (cadenas, números, valores lógicos) se comportan como los valores en matemáticas: el número `5` no se puede "editar", solo se puede obtener de él un nuevo número. Esto aporta ventajas importantes:

- Seguridad: los valores no cambiarán por accidente
- Rendimiento: al intérprete le resulta más fácil trabajar con valores inmutables
- Previsibilidad: menos efectos inesperados al pasar datos a las funciones

## ¿Y entonces cómo se cambia una cadena?

Si necesitas "cambiar" una cadena, se crea una nueva cadena y se guarda en la misma variable:

```php
<?php

$firstName = 'Alexander';
$firstName = strtoupper($firstName);

print_r($firstName); // => ALEXANDER
```

La variable `$firstName` ahora simplemente almacena otra cadena. Se reemplaza el valor de la variable, mientras que la propia cadena `'Alexander'` permanece intacta.

```text
$firstName = 'Alexander'

strtoupper($firstName)  →  'ALEXANDER'   ←  se crea una nueva cadena
$firstName              →  'Alexander'   ←  la original no cambió

$firstName = strtoupper($firstName)
└──────────────┬───────────────────┘
   la variable ahora contiene una nueva cadena
```

Es importante distinguir dos cosas: *cambiar el valor de una variable* y *cambiar el valor en sí*. El valor de una variable se puede reemplazar sin problemas, pero el valor en sí —una cadena, un número— no se puede cambiar.

## ¿Una variable nueva o la misma?

Solo conviene reutilizar una variable cuando se trata de una misma entidad. Si el usuario introdujo un nombre nuevo, eso ya es otra entidad, y es mejor crear una variable aparte:

```php
<?php

// La misma cadena, simplemente la actualizamos
$name = 'Alexander';
$name = 'Blexander';

// Entidades diferentes, mejor variables diferentes
$firstName = 'Alexander';
$correctedFirstName = 'Blexander';
```

Intentar "meter" todas las cadenas en una sola variable confunde el código. La variable deja de indicar qué se almacena en ella.

## Conclusión

Los tipos de datos primitivos en PHP (cadenas string, números enteros int, números reales float y valores lógicos bool) se comportan como valores inmutables (immutable). Las funciones no cambian las cadenas y los números que se les pasan, sino que devuelven nuevos valores. Cualquier "cambio" ocurre creando un nuevo valor y redefiniendo la variable.
