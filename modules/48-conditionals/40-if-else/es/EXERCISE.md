
Implementa la función `normalizeUrl()`, que realiza lo que se conoce como normalización de datos. Recibe una dirección de un sitio web y la devuelve con `https://` al principio.

La función acepta direcciones en forma de `DIRECCIÓN` o `http://DIRECCIÓN`, pero siempre devuelve la dirección en forma de `https://DIRECCIÓN`.

Hay dos formas de resolverlo:

1. Puedes comparar los primeros 7 caracteres de la cadena de argumento con la cadena `http://`.
2. Puedes usar la función [strpos](https://php.net/manual/es/function.strpos.php) para verificar si la subcadena `http://` está presente en la cadena de argumento.

Luego, en base a esto, agregar o no agregar `https://`.

Ejemplos de uso:

```php
<?php

normalizeUrl('google.com');   // 'https://google.com'
normalizeUrl('http://ai.fi'); // 'https://ai.fi'
```
