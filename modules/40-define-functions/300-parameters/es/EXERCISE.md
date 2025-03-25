Implementa la función `truncate()`, que recorta la cadena pasada como argumento hasta el número de caracteres especificado, agrega puntos suspensivos al final y devuelve la cadena resultante. Esta lógica se utiliza a menudo en sitios web para mostrar texto largo de forma abreviada. La función recibe dos parámetros:

1. La cadena que se debe recortar
2. El número de caracteres que se deben dejar

```php
<?php

// Pasando el texto directamente
// Recortar el texto dejando 2 caracteres
truncate('hexlet', 2)  // 'he...'

// A través de una variable
$text = '¡funciona!'
// Recortar el texto dejando 4 caracteres
$result = truncate($text, 4);
print_r($result); // => '¡fun...'
```

Puedes implementar esta función de diferentes maneras, solo te daremos una pista. Para resolverlo de esta manera, necesitarás extraer una subcadena de la cadena pasada como primer parámetro a la función `truncate()`. Para hacer esto, utiliza la función [substr()](https://www.php.net/manual/es/function.substr.php). Piensa, en función de la tarea, desde qué índice y con qué longitud debes extraer la subcadena.

  ```php
  <?php

  $word = 'bienvenido';
  // Puedes pasar los parámetros a la función a través de variables
  $length = 3;
  substr($word, 0, $length); // 'bie'
  ```

Desde el punto de vista del sistema de evaluación, no importa qué método utilices para implementar la función `truncate()` internamente, lo importante es que cumpla con la tarea planteada.
