A medida que un programa crece, el código se divide en archivos separados. En PHP, un archivo se conecta con la instrucción `require` — después de eso, todas sus funciones quedan disponibles:

```php
<?php
// index.php

require 'helpers.php';

sayHi(); // => Hi!
```

Las pruebas de este curso usan el mismo mecanismo: cargan tu solución con `require 'index.php';`.

`include` se diferencia de `require` en cómo se gestiona un archivo inexistente: `include` emite una advertencia y el programa continúa, mientras que `require` se detiene con un error. `require_once` carga un archivo solo una vez, lo cual es importante para archivos con funciones: volver a declarar una función provoca un error.

A diferencia de muchos lenguajes, las funciones integradas de PHP están disponibles en todas partes sin necesidad de importar nada. Por ejemplo, `floor()` redondea un número hacia abajo y `ceil()` hacia arriba:

```php
<?php

print_r(floor(7.9)); // => 7
print_r(ceil(7.1));  // => 8
```

Para evitar conflictos de nombres, PHP tiene **espacios de nombres** — has visto la línea `namespace HexletBasics\...;` al principio de cada ejercicio. Se estudian en detalle más adelante, en Hexlet.
