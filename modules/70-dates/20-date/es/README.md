Una de las principales funciones para trabajar con fechas en PHP es [date()](https://php.net/manual/ru/function.date.php). Convierte una marca de tiempo (_timestamp_) en un formato legible por humanos.

El primer parámetro de esta función es una descripción del formato de fecha, similar a los formatos utilizados en la función [sprintf()](https://php.net/manual/ru/function.sprintf.php):

```php
<?php

// Y representa el año
date('Y'); // 2018
```

Por defecto, `date()` utiliza la hora actual. Sin embargo, se puede pasar un _timestamp_ específico si es necesario:

```php
<?php

date('M', 123123123); // Nov
```

Hay docenas de opciones de formato en la función `date()`. Todas ellas se enumeran detalladamente en la página de documentación. No es necesario memorizarlas todas, pero es útil entender el principio de funcionamiento general. Todas las opciones se pueden combinar de diversas formas:

```php
<?php

date('l jS \of F Y h:i:s A'); // jueves 26 de julio de 2018 10:58:55 AM
```
