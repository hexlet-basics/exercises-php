Implementa una función `truncate()` que recorta la cadena pasada hasta el número de caracteres indicado, agrega puntos suspensivos al final y devuelve la cadena resultante. Una lógica como esta se usa a menudo en los sitios web para mostrar un texto largo de forma abreviada.

La función recibe dos parámetros:

1. La cadena que se debe recortar
2. El número de caracteres que se deben dejar

Un ejemplo de cómo debe funcionar la función que escribas:

```php
<?php

// Pasamos el texto directamente
// Recortamos el texto, dejando 2 caracteres
truncate('hexlet', 2); // 'he...'

// A través de una variable
$text = 'it works!';
// Recortamos el texto, dejando 4 caracteres
truncate($text, 4); // 'it w...'
```

Puedes completar la tarea de varias maneras, solo te sugeriremos una de ellas. Para resolverla de esta manera, necesitarás tomar una subcadena de la cadena pasada como primer parámetro a la función. Usa para ello la función [substr()](https://www.php.net/manual/es/function.substr.php). Basándote en la tarea, piensa, ¿desde qué índice y con qué longitud necesitas extraer la subcadena?

```php
<?php

$word = 'welcome!';
$length = 3;
substr($word, 0, $length); // 'wel'
```

Desde el punto de vista del sistema de verificación, no importa de cuál de las maneras se implemente la función `truncate()` por dentro. Lo principal es que cumpla la tarea planteada.
