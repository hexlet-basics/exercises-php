A menudo, al trabajar con cadenas de texto, es necesario determinar si una cadena es una **subcadena** de otra. La mayoría de los lenguajes de programación tienen una función incorporada diseñada específicamente para esta tarea.

En PHP, esta función solo está disponible a partir de la versión 8. Antes de eso, se simulaba utilizando la función [mb_strpos()](https://php.net/manual/ru/function.mb-strpos.php). Esta función busca la posición de la primera aparición de una cadena dentro de otra. Por ahora, utilizaremos `mb_strpos()`:

```php
<?php

if (mb_strpos('Valar Morgulis', 'Morgulis')) { // 6
    // ...
}
```

En el ejemplo anterior, la función devolverá 6, que corresponde al índice de la letra M:

```php
<?php

if (mb_strpos('Valar Morgulis', 'Valar')) { // 0
    // ...
}
```

En este ejemplo, se devolverá `0`, que corresponde a la primera letra de la cadena. En este código se oculta un error que cometen con frecuencia los principiantes. En PHP, el valor `0` se considera `false`, lo que significa que la condición no se cumplirá. La comprobación correcta se ve así:

```php
<?php

if (mb_strpos('Valar Morgulis', 'Valar') !== false) {
    // ...
}
```

La función `mb_strpos()` devuelve `false` si no se encuentra la subcadena. Por lo tanto, se puede utilizar una comparación estricta con `false`.
