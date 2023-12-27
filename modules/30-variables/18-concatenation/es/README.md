
Para reforzar el tema anterior, intentemos usar variables con concatenación. Sintácticamente, nada cambia: sabemos cómo concatenar (unir) dos cadenas:

```php
<?php

$que = "Camino" . "de Reyes";
print_r($que); // => "CaminodeReyes"
```

... y por lo tanto, podemos concatenar una cadena y una variable que contiene una cadena:

```php
<?php

$primero = "Caminos";
$que = $primero . "de Reyes";

print_r($que); // => "CaminodeReyes"
```

... e incluso concatenar dos variables que contienen cadenas:

```php
<?php

$primero = "Caminos";
$ultimo = 'de Reyes';

$que = $primero . $ultimo;
print_r($que); // => "CaminodeReyes"
```
