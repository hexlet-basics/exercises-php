
Implementa la función `normalizeUrl()`, que realiza la normalización de datos. Recibe la dirección de un sitio y la devuelve con `https://` al principio.

La función acepta direcciones en forma de `DIRECCIÓN` o `http://DIRECCIÓN`, pero siempre devuelve la dirección en forma de `https://DIRECCIÓN`. A la función también puede llegar una dirección que ya está en forma normalizada `https://DIRECCIÓN`, en cuyo caso no hay que cambiar nada.

Ejemplos de llamada:

```php
<?php

normalizeUrl('https://ya.ru'); // 'https://ya.ru'
normalizeUrl('google.com');    // 'https://google.com'
normalizeUrl('http://ai.fi');  // 'https://ai.fi'
```

Hay varias formas de resolver la tarea. Una de ellas es comprobar con la función `str_starts_with()` si la cadena-argumento empieza con la cadena `http://` y, en base a eso, agregar o no agregar `https://`.

Además, lo más probable es que necesites descartar la parte innecesaria al principio de la cadena. ¿Recuerdas que vimos una forma de obtener un fragmento de una cadena con la función `substr()`? Si no, te lo recuerdo:

```php
<?php

// Tomamos 2 caracteres desde el principio
print_r(substr('python', 0, 2)); // => py
```

Pues bien, con `substr()` también se puede descartar una cantidad determinada de caracteres:

```php
<?php

// Descartamos los primeros 2 caracteres
print_r(substr('python', 2)); // => thon
```
