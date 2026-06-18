
Implementa la función `hasAtSymbol()`, que verifica si un email contiene el símbolo `@`.

La función debe devolver `true` en cuanto encuentre `@`. Si el bucle llega al final de la cadena y no se encuentra el símbolo, la función debe devolver `false`.

```php
<?php

hasAtSymbol('support@example.com'); // true
hasAtSymbol('wrong-email');         // false
hasAtSymbol('@admin');              // true
```
