
Implementa la función `getHiddenCard()`, que recibe como argumento el número de una tarjeta de crédito (compuesto por 16 dígitos) como una cadena de texto y devuelve su versión oculta, que se puede utilizar en el sitio web para mostrarla. Si la tarjeta original tenía el número *2034399002125581*, entonces la versión oculta se verá así *\*\*\*\*5581*. En otras palabras, la función reemplaza los primeros 12 caracteres por asteriscos. La cantidad de asteriscos se controla mediante un segundo parámetro opcional. El valor predeterminado es 4.

```php
<?php

// La tarjeta de crédito se pasa como una cadena de texto
getHiddenCard("1234567812345678", 2); // "**5678"
getHiddenCard("1234567812345678", 3); // "***5678"
getHiddenCard('1234567812345678'); // "****5678"
getHiddenCard('2034399002121100', 1); // "*1100"
```

Para completar esta tarea, necesitarás la función [str_repeat()](https://www.php.net/manual/es/function.str-repeat.php), que repite una cadena de texto un número determinado de veces.

```php
<?php

str_repeat('+', 5); // "+++++"
str_repeat('o', 3); // "ooo"
```
