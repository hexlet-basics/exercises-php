La función [mktime()](https://php.net/manual/ru/function.mktime.php) genera una marca de tiempo (_timestamp_) a partir de la información de tiempo: segundos, horas, minutos y fecha:

```bash
mktime(
    int $hora,
    ?int $minuto = null,
    ?int $segundo = null,
    ?int $mes = null,
    ?int $dia = null,
    ?int $año = null
): int|false
```

`mktime()` es una función que acepta múltiples argumentos, donde cada parte de la fecha y el tiempo se pasa como un parámetro separado:

```php
<?php

mktime(0, 0, 0, 7, 1, 2000); // 962409600
```
