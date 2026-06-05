¿Qué sucede cuando «cambiamos» una cadena de texto en PHP? Las funciones integradas como `strtoupper()` no modifican la cadena original, sino que devuelven una nueva:

```php
<?php

$firstName = 'Alexander';
print_r(strtoupper($firstName)); // => ALEXANDER
print_r($firstName); // => Alexander
```

Esto se debe a la inmutabilidad de los valores primitivos en PHP: una cadena de texto no puede ser cambiada después de su creación. La inmutabilidad de los tipos primitivos es importante por varias razones, siendo la principal el rendimiento.

Pero a veces necesitamos cambiar una cadena de texto. Para eso existen las variables:

```php
<?php

$firstName = 'Alexander';
$firstName = strtoupper($firstName);
print_r($firstName); // => ALEXANDER
```

Hay una gran diferencia entre *cambiar el valor de una variable* y *cambiar el valor en sí*. No se puede cambiar un valor primitivo en PHP, pero se puede reemplazar el valor de una variable sin problemas.
