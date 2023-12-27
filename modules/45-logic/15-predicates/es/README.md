
Recordemos la función `isInfant()` del tema anterior:

```php
<?php

function isInfant($age)
{
    return $age < 1;
}

var_dump(isInfant(3));
```

Estas funciones se llaman **predicados**. Los predicados son funciones que responden a una pregunta y siempre devuelven `true` o `false`.

En todos los lenguajes de programación, los predicados se nombran de manera especial para facilitar su análisis. En PHP, los predicados suelen comenzar con los prefijos `is`, `has` o `can`, pero no se limitan a estas palabras. Ejemplos:

* `isInfant()` — "¿es un bebé?"
* `hasChildren()` — "¿tiene hijos?"
* `isEmpty()` — "¿está vacío?"
* `hasErrors()` — "¿tiene errores?"
