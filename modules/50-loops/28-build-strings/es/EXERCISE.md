Implementa la función `mysubstr()`, que extrae una subcadena de una cadena dada con una longitud especificada. Recibe dos argumentos (la cadena y la longitud) y devuelve la subcadena comenzando desde el primer carácter:

Ejemplo de uso:

```php
<?php

$str = 'If I look back I am lost';
mysubstr($str, 1); // 'I'
mysubstr($str, 7); // 'If I lo'
```


Utiliza el mismo enfoque que en la función de inversión de cadenas del tutorial: construye la cadena resultante en un bucle, recorriendo la cadena original hasta un punto determinado.
